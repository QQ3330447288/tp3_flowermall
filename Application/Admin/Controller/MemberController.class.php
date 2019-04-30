<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class MemberController extends Controller
{


    public function lst()
    {
        $model = D('member');
        $memberDate = $model->select();
        $this->assign(array(
            'memberDate' => $memberDate,
        ));
        $this->display();
    }
}