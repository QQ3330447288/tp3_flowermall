<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class MemberController extends Controller
{


    public function add()
    {
        if (IS_POST) {
            $model = D('Admin/member');
            if ($model->validate($model->_addmember_validate)->create(I('post.'), 1)) {
                if ($model->add()) {
                    $this->success('添加成功！', U('lst'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
        $mlModel = D('member_lever');
        $mlData = $mlModel->select();
//        var_dump($mlData);
//        die();
        $this->assign(array(
            'mlData' => $mlData,
        ));

        $this->display();
    }

    public function lst()
    {
        $model = D('member');
        $memberDate = $model->select();
        $this->assign(array(
            'memberDate' => $memberDate,
        ));
        $this->display();
    }

    public function del()
    {
        $model = D('member');
//        var_dump(I('get.id'));
//        die();
        if (false !== $model->delete(I('get.id'))) {
            $this->success('删除成功！', U('lst'));
        } else {
            $this->error('删除失败！原因：' . $model->getError());
        }
    }

}