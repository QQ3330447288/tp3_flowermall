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

class IndexModel extends Model
{
    public function search()
    {
        $where = array();//空人where条件
        $where['cate_name'] = array('egt', '爱情鲜花');

    }
    public function search1()
    {
        $where = array();//空人where条件
        $where['cate_name'] = array('egt', '爱情鲜花');

    }
}

