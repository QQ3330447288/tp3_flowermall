<?php
return array(
    //'配置项'=>'配置值'
//    数据库配置
    'DB_TYPE' => 'mysqli',//mysql旧，不推荐使用；mysqli,pdo扩展里开启：php_mysqli，php_pdo_mysql。pdo需要修改
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'flower',
    'DB_USER' => 'root',
    'DB_PWD' => 'root',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'flower_',
    'DB_CHARSET' => 'utf8',
    'DEFAULT_FILTER' => 'trim,htmlspecialchars', // 默认参数过滤方法 用于I函数...,trim去掉空格
);