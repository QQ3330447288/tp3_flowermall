<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class GoodsController extends Controller
{
    //显示和处理表单
    public function add()
    {

        //处理表单-判断用户是否提交表单
        if (IS_POST) {
            //D函数:生成模型,模型名和表名相同
            $model = D('goods');

            /**
             * 2、create方法：a.接受数据并且并保存在模型中了b.根据模型中定义的规则验证表单
             * 第一个参数：要接收的数据，默认$_POST
             * 第二个参数：表单的类型,当前是添加还是修改表单，1：添加2、修改
             * $_POST:表单中原有数据，I('post.'):过滤之后的$_POST的数据，过滤xss攻击
             */
//            $model->create(I('post.'), 1)
            if ($model->create(I('post.'), 1)) {//验证表单
                if ($model->add()) {//添加数据；add()调用钩子函数
                    //$this->success('操作成功！', U('lst')，3);3后跳转
                    $this->success('操作成功！', U('lst'));//当前控制器的lst方法，默认一秒
                    exit;//1s之后还会向后执行，停止一下， 等待跳转
                }
            }
            //如果走到这里，说明上面失败了，在这里处理失败的请求
            //失败的原因
            $error = $model->getError();//从模型中获取失败的原因
            //在控制器中显示信息
            $this->error($error);//错误信息，跳转地址（默认跳回上一个页面），默认在三秒跳转
        }


        //取出所有品牌

        //1、显示表单
        $this->display();
    }

    public function lst()
    {
        $model = D('goods');
        //返回数据和翻页
        $data = $model->search();
        $this->assign($data);
//      $this->assign('data',$data['data']);
//      $this->assign('data',$data['page']);
//      $this->assign(array(
//           'data' => $data['data'],
//           'data' => $data['page']
//       ));
        $this->display();
    }

    public function del()
    {
        $model = D('goods');
        if ($model->delete(I('get.goods_id')) == true) {
            $this->success('删除成功！', U('lst'));
        } else {
            $this->error('删除失败！原因：' . $model->getError());
        }
    }
}