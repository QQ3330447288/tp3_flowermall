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

        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function goods()
    {
        //接收商品id
        $id = I('get.id');
        //根据ID取出商品的详细信息
        $gModel = D('Admin/Goods');
        $info = $gModel->find($id);
        $data = $gModel->searchCateBrand($id);
        $datacate = $gModel->searchCate($id);

        $cModel = D('Admin/comment');
        $commentinfo = $cModel->searchComment($id);

//        var_dump($commentinfo);
//        die();


        $this->assign($data);
        $this->assign(array(
            'info' => $info,
            'datacate' => $datacate,
            'commentinfo' => $commentinfo
        ));
        $this->display();
    }

    public function loveflower()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->searchLove();
        $this->assign($data);
        //热门推荐
        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function birflower()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->searchbir();
        $this->assign($data);
        //热门推荐
        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function openflower()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->searchopen();
        $this->assign($data);
        //热门推荐
        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function liveflower()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->searchlive();
        $this->assign($data);
        //热门推荐
        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function blueflower()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->searchblue();
        $this->assign($data);
        //热门推荐
        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function highendflower()
    {
        $model = D('Admin/Goods');
        //返回数据和翻页
        $data = $model->searchhigh();
        $this->assign($data);
        //热门推荐
        $hot = $model->limit(0, 5)->select();
        $this->assign(array(
            'hot' => $hot,
        ));
        $this->display();
    }

    public function order()
    {
        $id = I('get.id');
        $model = D('Admin/Goods');
        $goods_dat = $model->orderlst($id);
//        var_dump($goods_data);
//        die();

        $goods_data = $model->find($id);
        $this->assign(array(
            'goods_data' => $goods_data,
        ));
        //保存订单信息
        if (IS_POST) {
            $model = D('Admin/order');
            if ($model->create(I('post.'), 1)) {
                if ($model->add()) {
                    $this->success('添加成功！', U('orderlst'));
                    exit;
                }
            }
            $this->error($model->getError());
        }

        $this->display();
    }

    public function cart()
    {
        $id = I('get.id');
        $model = D('Admin/Goods');
        $data = $model->orderlst($id);

        $this->assign($data);
        $this->display();
    }



    public function orderlst()
    {
        $model = D('Admin/Goods');
        $goods_data = $model->find();
        $this->assign(array(
            'goods_data' => $goods_data,
        ));
        $this->display();
    }


}