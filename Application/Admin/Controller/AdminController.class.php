<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class AdminController extends Controller
{
    public function login()
    {
        if (IS_POST) {
            $model = D('Admin/admin');
            //receive form
            if ($model->validate($model->_login_validate)->create()) {
                if ($model->login()) {
                    $this->success('登录成功！', U('/admin/'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
        $this->display();
    }

    public function lst()
    {
        $model = D('admin');
        $adminDate = $model->select();
        $this->assign(array(
            'adminDate' => $adminDate,
        ));
        $this->display();
    }
    public function add()
    {
        if (IS_POST) {
            $model = D('Admin/admin');
            if ($model->create(I('post.'), 1)) {
                if ($model->add()) {
                    $this->success('添加成功！', U('lst'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
        $this->display();
    }
    public function del()
    {
        $model = D('admin');
//        var_dump(I('get.id'));
//        die();
        if (false !== $model->delete(I('get.id'))) {
            $this->success('删除成功！', U('lst'));
        } else {
            $this->error('删除失败！原因：' . $model->getError());
        }
    }



    public function logout()
    {
        $model = D('Admin/admin');
        $model->logout();
        redirect('/admin/admin/login.html');
    }
}