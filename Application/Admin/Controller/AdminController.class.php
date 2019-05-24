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

    public function logout()
    {
        $model = D('Admin/admin');
        $model->logout();
        redirect('/admin/admin/login.html');
    }
}