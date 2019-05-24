<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>在线鲜花订购系统后台</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Admin/css/ionicons.min.css">
<link rel="stylesheet" href="/Public/Admin/css/AdminLTE.min.css">
<link rel="stylesheet" href="/Public/Admin/css/_all-skins.min.css">
<link rel="stylesheet" href="/Public/Admin/css/datepicker3.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
    <a href="index.html" class="logo" >
            <span class="logo-mini">
               在线鲜花订购系统</span>
        <span class="logo-lg">在线鲜花订购系统</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas">
            <span class="sr-only">下拉菜单</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/Public/Admin/images/user.jpg"
                             class="user-image" alt="User Image">
                        <span class="hidden-xs">xxx</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="/Public/Admin/images/user.jpg"
                                 class="img-circle" alt="User Image">
                            <p>
                                xxx
                                <small>2017-06-01</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
<!--                                <a href="pwd.html" class="btn btn-default btn-flat">修改密码</a>-->
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo U('Admin/logout');?>" class="btn btn-default btn-flat">退出系统</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/Public/Admin/images/user.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p> <?php echo session('a_username');?></p>
<!--                <span class="glyphicon glyphicon-map-marker"></span><a href="#"> 在线</a>-->
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">管理菜单</li>
            <li class="treeview" id="g-1">
                <a href="#">
                    <span class="glyphicon glyphicon-home"></span>
                    <span>首页</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu" id="g-1-1">
                    <li>
                        <a href="/index.php/Admin/index/">
                            <span class="glyphicon "></span></span>控制面板
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview" id="g-3">
                <a href="#">
                    <span class="glyphicon glyphicon-gift"></span>
                    <span>商品管理</span>
                    <span class="label label-primary pull-right">3</span>
                </a>
                <ul class="treeview-menu">
                    <li id="g-3-1">
                        <a href="/index.php/Admin/Goods/lst">
                            <span class="glyphicon "></span>商品列表
                        </a>
                    </li>
                    <li id="g-3-2">
                        <a href="/index.php/Admin/Cate/lst">
                            <span class="glyphicon"></span>分类列表
                        </a>
                    </li>
<!--                    <li id="g-3-3">-->
<!--                        <a href="/index.php/Admin/Attribute/lst">-->
<!--                            <span class="glyphicon"></span>属性列表-->
<!--                        </a>-->
<!--                    </li>-->
                    <li id="g-3-4">
                        <a href="/index.php/Admin/brand/lst">
                            <span class="glyphicon"></span>品牌列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview" id="g-4">
                <a href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>会员管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li id="g-4-1">
                        <a href="/index.php/Admin/MemberLevel/lst">
                            <span class="glyphicon"></span>会员级别
                        </a>
                    </li>
                    <li id="g-4-2">
                        <a href="/index.php/Admin/Member/lst">
                            <span class="glyphicon"></span>会员列表
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview" id="g-5">
                <a href="#">
                    <span class="glyphicon glyphicon-comment"></span>
                    <span>评论管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li id="g-5-1">
                        <a href="/index.php/Admin/comment/lst">
                            <span class="glyphicon"></span> 评论列表
                        </a>
                    </li>
<!--                    <li>-->
<!--                        <a href="/index.php/Admin/comment/lst">-->
<!--                            <span class="glyphicon"></span> 回复列表-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </li>
            <li class="treeview" id="g-6">
                <a href="#">
                    <span class="glyphicon glyphicon-file"></span>
                    <span>订单管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li id="g-6-1">
                        <a href="/index.php/Admin/order/lst">
                            <span class="glyphicon"></span>订单列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview" id="g-7">
                <a href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>管理员管理</span>
                    <span class="label label-primary pull-right">3</span>
                </a>
                <ul class="treeview-menu">
<!--                    <li id="g-7-1">-->
<!--                        <a href="/index.php/Admin/Admin/lst">-->
<!--                            <span class="glyphicon"></span>权限列表-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li id="g-7-2">-->
<!--                        <a href="/index.php/Admin/Admin/lst">-->
<!--                            <span class="glyphicon"></span>角色列表-->
<!--                        </a>-->
<!--                    </li>-->
                    <li id="g-7-3">
                        <a href="/index.php/Admin/Admin/lst">
                            <span class="glyphicon"></span>管理员列表
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>在线鲜花订购系统</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 商品管理</a></li>
                <li class="active">添加分类</li>
            </ol>
        </section>
        <section class="content" id="showcontent">
            <div class="row" style="">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">分类列表>添加分类</h3>
                        </div>
                        <div class="box-body box-primary">
                            <form action="/index.php/Admin/Cate/add" method="post">
                                <div class="form-group">
                                    <label for="">分类名称</label>
                                    <input type="text" class="form-control" name="cate_name"
                                           placeholder="请输入分类名称">
                                </div>
                                <button type="submit" class="btn btn-primary">添加</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>版本</b> 1.0
    </div>
    <strong>版权 &copy; 2019-2020 归<a href="">xxx</a>.</strong> 所有
</footer>
    <div class="control-sidebar-bg"></div>
</div>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="/Public/Admin/js/jquery.slimscroll.min.js"></script>
<script src="/Public/Admin/js/fastclick.min.js"></script>
<script src="/Public/Admin/js/app.min.js"></script>
<script src="/Public/Laydate/laydate.js"></script>
<script src="//cdn.bootcss.com/holder/2.9.4/holder.min.js"></script>
<script>
    $(document).ready(function () {
        $("#g-3").addClass("active");
        $("#g-3-2").addClass("active");
    });
</script>
<script>
    laydate.render({
        elem: '#firstTime'
        , type: 'datetime'
    });
    laydate.render({
        elem: '#stopTime'
        , type: 'datetime'
    });
</script>
</body>
</html>