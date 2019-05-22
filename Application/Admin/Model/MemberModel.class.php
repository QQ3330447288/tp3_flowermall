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

class MemberModel extends Model
{
    protected $insertFields = array('username', 'password', 'cpassword');
    protected $updateFields = array('id', 'username', 'password');
    //register
    protected $_validate = array(
        array('username', 'require', '用户名不能为空！', 1, 'regex', 3),
        array('password', 'require', '密码不能为空！', 1, 'regex', 1),
        array('cpassword', 'password', '两次密码输入不一致！', 1, 'confirm', 3),
        array('username', '', '用户名已存在！', 1, 'unique', 3),
    );
    public $_login_validate = array(
        array('username', 'require', '用户名不能为空！', 1),
        array('password', 'require', '密码不能为空！', 1),
    );

    public function login()
    {
        //从模型中获取用户名和密码
        $username = $this->username;
        $password = $this->password;
        //查询这个用户名是否存在
        $user = $this->where(array(
            'username' => array('eq', $username),
        ))->find();
        if ($user) {
            if ($user['password'] == md5($password)) {
                //登录成功
                session('m_id', $user['id']);
                session('m_username', $user['username']);
                return True;
            } else {
                $this->error = '密码不正确！';
                return False;
            }
        }
    }

    protected function _before_insert(&$data, $option)
    {
        $data['password'] = md5($data['password']);
    }

    public function logout()
    {
        session(null);
    }
}