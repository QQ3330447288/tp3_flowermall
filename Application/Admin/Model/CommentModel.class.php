<?php
/**
 * Created by PhpStorm.
 * User: Thanlon
 * Date: 2019/3/5
 * Time: 20:02
 */

namespace Admin\Model;

use Think\Model;
use Think\Think;

header("content-type:text/html;charset=utf-8");

class CommentModel extends Model
{
    public function searchComment($id)
    {
        $where['goods_id'] = array('eq', $id);
        $commentinfo = $this
            ->where($where)
            ->select();
//        var_dump($commentinfo);
//        die();
        return array(
            'commentinfo' => $commentinfo,
        );
    }
}

