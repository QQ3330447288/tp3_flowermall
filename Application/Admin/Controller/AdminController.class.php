<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class AdminController extends Controller
{


    public function login()
    {
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
}