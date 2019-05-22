<?php


namespace Home\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class MemberController extends Controller
{
    public function login()
    {
        if (IS_POST) {
            $model = D('Admin/Member');
            //receive form
            if ($model->validate($model->_login_validate)->create()) {
                if ($model->login()) {
                    $this->success('登录成功！', U('/'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
        $this->display();
    }

    public function register()
    {
        if (IS_POST) {
            $model = D('Admin/Member');
            //receive form,add need use 1
            if ($model->create(I('post.'), 1)) {
                if ($model->add()) {
                    $this->success('注册成功！', U('login'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
        $this->display();
    }


    public function logout()
    {
        $model = D('Admin/Member');
        $model->logout();
        redirect('/');
    }
}