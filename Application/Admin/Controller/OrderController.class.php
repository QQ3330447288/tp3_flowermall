<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class OrderController extends Controller
{
    public function lst()
    {
        $model = D('order');
        $orderDate = $model->select();
        $this->assign(array(
            'orderDate' => $orderDate,
        ));
        $this->display();
    }
}