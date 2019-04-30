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
}