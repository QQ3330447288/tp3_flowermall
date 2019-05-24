<?php
/**
 * Created by PhpStorm.
 * User: Thanlon
 * Date: 2019/3/5
 * Time: 20:02
 */

namespace Admin\Model;

use Think\Model;
use Think\Think;

header("content-type:text/html;charset=utf-8");

class GoodsModel extends Model
{
    //添加时调用create方法允许接收的字段
    protected $insertFields = 'goods_name,shop_price,market_price,goods_desc,logo,is_on_sale,brand_id,cate_id';
    //添加时调用create方法允许接收的字段
    protected $updateFields = 'goods_id,goods_name,shop_price,market_price,goods_desc,logo,is_on_sale,brand_id,cate_id';

    //定义验证规则
    //1、表示表单必须验证；默认0是：存在字段就验证；2、值不为空的时候验证
    protected $_validate = array(
        array('goods_name', 'require', '商品名称不能为空！', 1),
        array('shop_price', 'currency', '本店价格必须是货币类型！', 1),
        array('market_price', 'currency', '市场价格必须是货币类型！', 1),
    );
    //如果表单中出现了不应该出现的字段会怎样？；如果提交了表单，伪造id中添加16777215
//    解决方法：在模型中定义create方法只允许接收哪些字段
//    接受用户数据必须使用I函数接受
//    $_GET['name']->I('get.name');
//    $_POST['name']->I('post.name');
//    $_POST  ->I('post.')
//I函数过滤，如何过滤：
//在TP配置文件中，htmlspecialchars：默认参数

    //&$data:即将要插入数据库中的数据（数组）,必须按照引用传递:函数内部要修改函数内部的变量，除非传递对象，对象默认按照引用传递
    protected function _before_insert(&$data, $options)//$options：模型对应表名、模型名
    {
//        die('abc');
        //获取系统当前时间
        $data['addtime'] = date('Y-m-d H:i:s', time());
        //过滤goods_desc字段
        $data['goods_desc'] = removeXSS($_POST["goods_desc"]);//js被过滤，被转义; <script>&lt;script&gt


        //判断有没有图片:没有传入图片，error是4，size是0；传入图片：error是0
//        var_dump($_FILES);
//        die();
        //从$_FILES数组中拿到error
        if ($_FILES['logo']['error'] == 0) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 1024 * 1024; //3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Public/Uploads/'; // 设置附件上传根目录
            $upload->savePath = 'Goods/'; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if (!$info) {// 上传错误提示错误信息
                //获取失败的原因保存在模型中，把错误信息保存在模型的error属性中，然后在控制器里会调用$model->getError()获取到信息由控制器打印错误信息
                $this->error = $upload->getError();
                return false;
            } else {// 上传成功
//                var_dump($info);die();
                $logo = $info['logo']['savepath'] . $info['logo']['savename'];
                $mbiglogo = $info['logo']['savepath'] . 'mbig_' . $info['logo']['savename'];
                $biglogo = $info['logo']['savepath'] . 'big_' . $info['logo']['savename'];
                $midlogo = $info['logo']['savepath'] . 'mid_' . $info['logo']['savename'];
                $smlogo = $info['logo']['savepath'] . 'sm_' . $info['logo']['savename'];
                $image = new \Think\Image();
                //打开要生成缩略图的图片
                $image->open('./Public/Uploads/' . $logo);
                //生成缩略图
                $image->thumb(700, 700)->save('./Public/Uploads/' . $mbiglogo);
                $image->thumb(350, 350)->save('./Public/Uploads/' . $biglogo);
                $image->thumb(130, 130)->save('./Public/Uploads/' . $midlogo);
                $image->thumb(50, 50)->save('./Public/Uploads/' . $smlogo);
//                die;
//                将路径放到存入数据库中
                $data['logo'] = $logo;
                $data['mbig_logo'] = $mbiglogo;
                $data['big_logo'] = $biglogo;
                $data['mid_logo'] = $midlogo;
                $data['sm_logo'] = $smlogo;
            }
        }
    }

    /**
     * 搜索、排序、分页
     */
    public function search($perPger = 10)
    {
        /***************start搜索*******************/
        $where = array();//空人where条件
        $goods_name = I('get.goods_name');
        if ($goods_name) {//值非空
            $where['goods_name'] = array('like', "%$goods_name%");//TP写：WHERE goods_name LIKE '%$goods_name%'
        }
        $fp = I('get.firstPrice');
        $lp = I('get.lastPrice');
        if ($fp && $lp)
            $where['shop_price'] = array('between', array($fp, $lp));//where shop_price between $fp and $tp
        elseif ($fp)
            $where['shop_price'] = array('egt', $fp);//>=
        elseif ($lp)
            $where['shop_price'] = array('elt', $lp);//<=
        $ios = I('get.is_on_sale');
        if ($ios)
            $where['is_on_sale'] = array('eq', $ios);
//        添加时间
        $ft = I('get.firstTime');
        $st = I('get.stopTime');
        if ($ft && $st)
            $where['shop_price'] = array('between', array($ft, $st));//where shop_price between $fp and $tp
        elseif ($ft)
            $where['shop_price'] = array('egt', $ft);//>=
        elseif ($st)
            $where['shop_price'] = array('elt', $st);

        /***************stop搜索*******************/

        /***************start排序*******************/
        $orderby = 'goods_id';//默认排序字段 搜索的时候：$orderby = 'a.id'
        $orderway = 'desc';//默认排序方式
        $odby = I('get.order_by');
        if ($odby) {
            if ($odby == 'id_asc')
                $orderway = 'asc';
            elseif ($odby == "price_desc") {
                $orderby = 'shop_price';
            } elseif ($odby == 'price_asc') {
                $orderby = 'shop_price';
                $orderway = 'asc';
            }
        }
        /***************stop排序*******************/


        /***************start搜索*******************/
        //取出总的记录数
//        $count = $this->count();
        $count = $this->where($where)->count();//在where条件下人总人记录数
        //生成翻页类的对象
        $pageObj = new \Think\Page($count, $perPger);
        //设置样式
        $pageObj->setConfig('next', '下一页');
        $pageObj->setConfig('prev', '上一页');
        //生成页面下面显示的上一页、下一页的字符串
        $pageString = $pageObj->show();
        //取某一页的数据
//        $data = $this->limit($pageObj->firstRow . ',' . $pageObj->listRows)->select();
        $data = $this->order("$orderby $orderway")
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN __BRAND__ b ON a.brand_id=b.id')
            ->where($where)
            ->limit($pageObj->firstRow . ',' . $pageObj->listRows)
            ->select();#__BRAND__或者flower_brand

        //返回数据
        return array(
            'data' => $data,
            'page' => $pageString,
        );
        /***************stop搜索*******************/
    }

    protected function _before_delete($options)
    {
        //var_dump($options);die();
        $id = $options['where']['goods_id'];  //要删除商品的id
        /*************start删除原来的图***********/
        $oldlogo = $this->field('logo,mbig_logo,big_logo,mid_logo,sm_logo')->find($id);//获取原图路径
        unlink('./Public/Uploads/' . $oldlogo['logo']);
        unlink('./Public/Uploads/' . $oldlogo['mbig_logo']);
        unlink('./Public/Uploads/' . $oldlogo['big_logo']);
        unlink('./Public/Uploads/' . $oldlogo['mid_logo']);
        unlink('./Public/Uploads/' . $oldlogo['sm_logo']);
        /*************stop删除原来的图***********/

    }

    public function searchLove()
    {
//        $goods_name = I('get.goods_name');
        $where['cate_id'] = array('eq', '2');
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN flower_cate b ON a.cate_id=b.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        //返回数据
        return array(
            'data' => $data,
        );
    }

    public function searchCateBrand($id)
    {
//        ->join('LEFT JOIN __BRAND__ b ON a.brand_id=b.id LEFT JOIN flower_cate c ON a.cate_id=c.id')
        $where['goods_id'] = array('eq', $id);
//        var_dump($id);
//        die();
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN __BRAND__ b ON a.brand_id=b.id')
//            ->join('LEFT JOIN __BRAND__ b LEFT JOIN flower_cate c ON a.brand_id=b.id AND a.cate_id=c.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
//        var_dump($data);
//        die();
        //返回数据
//        $databrand = $this
//            ->field('a.*,c.*')
//            ->alias('a')
//            ->join('LEFT JOIN __CATE__ C ON a.cate_id=c.id')
//            ->where($where)
//            ->select();#__BRAND__或者flower_brand
////        var_dump($databrand);
////        die();
        return array(
            'data' => $data,
//            'databrand' => $databrand,
        );
    }

    public function searchCate($id)
    {
        $where['goods_id'] = array('eq', $id);
        $databrand = $this
            ->field('a.*,c.*')
            ->alias('a')
            ->join('LEFT JOIN __CATE__ C ON a.cate_id=c.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        return array(
            'databrand' => $databrand,
        );
    }

    public function searchbir()
    {
        $num = "爱情";
        $goods_name = I('get.goods_name');
        $where['cate_id'] = array('eq', '3');
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN flower_cate b ON a.cate_id=b.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        //返回数据
        return array(
            'data' => $data,
        );
    }

    public function searchopen()
    {
        $goods_name = I('get.goods_name');
        $where['cate_id'] = array('eq', '4');
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN flower_cate b ON a.cate_id=b.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        //返回数据
        return array(
            'data' => $data,
        );
    }

    public function searchlive()
    {
        $num = "爱情";
        $goods_name = I('get.goods_name');
        $where['cate_id'] = array('eq', '5');
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN flower_cate b ON a.cate_id=b.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        //返回数据
        return array(
            'data' => $data,
        );
    }

    public function searchblue()
    {
        $num = "爱情";
        $goods_name = I('get.goods_name');
        $where['cate_id'] = array('eq', '6');
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN flower_cate b ON a.cate_id=b.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        //返回数据
        return array(
            'data' => $data,
        );
    }

    public function searchhigh()
    {
        $goods_name = I('get.goods_name');
        $where['cate_id'] = array('eq', '7');
        $data = $this
            ->field('a.*,b.*')
            ->alias('a')
            ->join('LEFT JOIN flower_cate b ON a.cate_id=b.id')
            ->where($where)
            ->select();#__BRAND__或者flower_brand
        //返回数据
        return array(
            'data' => $data,
        );
    }

    public function orderlst($id)
    {
        $where['goods_id'] = array('eq', $id);
        $data = $this
            ->where($where)
            ->select();
        return array(
            '$data' => $data,
        );
    }

}


#内连接和外连接区别
#去掉LEFT是内连
#内连接：
#SELECT a.*,b.brand_name FROM flower_goods a JOIN flower_brand b ON a.brand_id = b.id
#等价于：
#SELECT a.*,b.brand_name FROM flower_goods a,flower_brand b WHERE a.brand_id = b.id
//内连接：没有关联的记录就取不出来，必须两个表有相关连的数据才能取出来
//外连接：主表的数据一定都能取出来，无论有没有关联的数据


