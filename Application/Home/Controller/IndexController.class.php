<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->search();
        $this->assign($data);
        $this->display();
    }

    public function goods()
    {
        //接收商品id
        $id = I('get.id');
        //根据ID取出商品的详细信息
        $gModel = D('Admin/Goods');
        $info = $gModel->find($id);
        $this->assign(array(
            'info' => $info,
        ));
        $this->display();
    }

    public function lst()
    {

    }

}