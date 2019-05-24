<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理员登录</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Admin/css/ionicons.min.css">
<link rel="stylesheet" href="/Public/Admin/css/AdminLTE.min.css">
<link rel="stylesheet" href="/Public/Admin/css/_all-skins.min.css">
<link rel="stylesheet" href="/Public/Admin/css/datepicker3.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <h3>在线鲜花订购系统管理员登录</h3>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg"></p>
        <form action="/admin/admin/login.html" method="post" id="form-data">
            <div class="form-group has-feedback">
                <input name="username" type="text" class="form-control" placeholder="请输入账号！">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div class="col-md-12" id="input_user"></div>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="请输入密码！">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <div class="col-md-12" id="input_pwd"></div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <div class="col-xs-4">
                    <input id="btn-sub" type="submit" class="btn btn-primary btn-block btn-flat"></input>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../static/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="../static/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="../static/admin/plugins/iCheck/icheck.min.js"></script>
</body>
</html>