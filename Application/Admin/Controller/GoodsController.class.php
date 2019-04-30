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
        $brandModel = D('brand');
        $brandData = $brandModel->select();
        $cateModel = D('cate');
        $cateData = $cateModel->select();

        //设置页面信息
        $this->assign(array(
            'brandData' => $brandData,
            'cateData'=>$cateData,
        ));

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

    public function edit()//edit.html与方法名edit对应
    {
        $id = I('get.id');
        $model = D('goods');
        if (IS_POST) {
//            var_dump(I('post.'));exit();
            if ($model->create(I('post.'), 2)) {//接受表单，根据表单中的规则验证表单,create默认接受所有字段
//                var_dump($model->add()); exit();
                if (false !== $model->save()) {//save()的返回值是失败False,成功受影响条数，修改后和修改前相同是0，0是假会认为修改失败
                    $this->success('操作成功!', U(lst), 3);//当前控制器的方法
                    exit;
                }
            }
            $error = $model->getError();//失败的信息存入控制器中
            $this->error($error);
        }
        //根据id取出要修改的商品信息start
        $data = $model->find($id);
        $this->assign('data', $data);
        //根据id取出要修改的商品信息stop


        //取出所有品牌
        $brandModel = D('brand');
        $brandData = $brandModel->select();
        //设置页面信息
        $this->assign(array(
            'brandData' => $brandData,
        ));


        $this->display();
    }


    public function del()
    {
        $model = D('goods');
        if (false !== $model->delete(I('get.id'))) {
            $this->success('删除成功！', U('lst'));
        } else {
            $this->error('删除失败！原因：' . $model->getError());
        }
    }
}