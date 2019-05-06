<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class CommentController extends Controller
{
    public function lst()
    {
        $model = D('comment');
        $commentDate = $model->select();
        $this->assign(array(
            'commentDate' => $commentDate,
        ));
        $this->display();
    }
}