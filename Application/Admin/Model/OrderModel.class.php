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

class OrderModel extends Model
{
        protected function _before_insert(&$data, $options)
    {
        //获取系统当前时间
        $data['pay_time'] = date('Y-m-d H:i:s', time());
        $data['addtime'] = date('Y-m-d H:i:s', time());
//        var_dump($data['pay_time']);
//        die();
    }
}

