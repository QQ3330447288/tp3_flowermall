<?php


namespace Home\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class MemberController extends Controller
{
    public function login()
    {
        $this->display();
    }

    public function register()
    {
        $this->display();
    }
}