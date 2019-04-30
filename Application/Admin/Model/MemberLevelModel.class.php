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

class MemberLevelModel extends Model
{
    protected $insertFields = 'lever_name,score_upper,score_lower';
}

