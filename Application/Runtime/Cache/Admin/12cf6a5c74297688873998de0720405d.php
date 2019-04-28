<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>在线鲜花订购系统后台</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/Public/Common/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Admin/css/ionicons.min.css">
<link rel="stylesheet" href="/Public/Admin/css/AdminLTE.min.css">
<link rel="stylesheet" href="/Public/Admin/css/_all-skins.min.css">
<link rel="stylesheet" href="/Public/Admin/css/datepicker3.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
    <a href="index.html" class="logo">
            <span class="logo-mini">
               在线鲜花订购系统</span>
        <span class="logo-lg">在线鲜花订购系统</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" >
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
                                <a href="pwd.html" class="btn btn-default btn-flat">修改密码</a>
                            </div>
                            <div class="pull-right">
                                <a href="login.html" class="btn btn-default btn-flat">退出系统</a>
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
                <p>Thanlon</p>
                <span class="glyphicon glyphicon-map-marker"></span><a href="#"> 在线</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">管理菜单</li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-home"></span>
                    <span>首页</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/index.php/Admin/index/">
                            <span class="glyphicon "></span></span>控制面板
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-tags"></span>
                    <span>分类管理</span>
                    <span class="label label-primary pull-right">2</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="tag_add.html">
                            <span class="glyphicon"></span> 添加分类
                        </a>
                    </li>
                    <li>
                        <a href="tag_list.html">
                            <span class="glyphicon"></span> 分类列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-gift"></span>
                    <span>商品管理</span>
                    <span class="label label-primary pull-right">2</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/index.php/Admin/Goods/lst">
                            <span class="glyphicon "></span>商品列表
                        </a>
                    </li>
                    <li>
                        <a href="/index.php/Admin/Goods/add">
                            <span class="glyphicon"></span>添加商品
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>会员管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="user_list.html">
                            <span class="glyphicon"></span>会员列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                   <span class="glyphicon glyphicon-comment"></span>
                    <span>评论管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="comment_list.html">
                            <span class="glyphicon"></span> 评论列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                   <span class="glyphicon glyphicon-file"></span>
                    <span>资金管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="comment_list.html">
                            <span class="glyphicon"></span>评论列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>管理员管理</span>
                    <span class="label label-primary pull-right">2</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="admin_add.html">
                            <span class="glyphicon"></span>添加管理员
                        </a>
                    </li>
                    <li>
                        <a href="admin_list.html">
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
                <li class="active">商品列表</li>
            </ol>
        </section>
        <section class="content" id="showcontent">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">商品列表</h3>
                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right"
                                           placeholder="请输入关键字...">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form style="margin-left: 10px" method="get">
                            <div class="form-inline">
                                <label for="">商品名称：</label>
                                <input type="text" name="goods_name" class="form-control"
                                       value="<?php echo I('get.goods_name');?>">
                            </div>
                            <div class="form-inline" style="margin-top: 2px;">
                                <div class="form-group">
                                    <label for="">价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</label>
                                    <input type="text" class="form-control" name="firstPrice"
                                           value="<?php echo I('get.firstPrice');?>">
                                </div>
                                <div class="form-group">
                                    <label for="">~</label>
                                    <input type="text" class="form-control" name="lastPrice"
                                           value="<?php echo I('get.lastPrice');?>">
                                </div>
                            </div>

                            <div class="form-inline" style="margin-top: 2px;">
                                <label>是否上架：</label>
                                <?php $is_on_sale=I('get.is_on_sale');?>
                                <label class="radio-inline">
                                    <input type="radio" name="is_on_sale"
                                           value="" <?php if($is_on_sale=='')echo 'checked'; ?> /> 全部
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_on_sale"
                                           value="是" <?php if($is_on_sale=='是')echo 'checked'; ?> /> 上架
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_on_sale"
                                           value="否" <?php if($is_on_sale=='否')echo 'checked'; ?>> 下架
                                </label>
                            </div>
                            <div class="form-inline" style="margin-top: 2px;">
                                <div class="form-group">
                                    <label for="">添加时间：</label>
                                    <input type="text" class="form-control" name="firstTime"
                                           value="<?php echo I('get.firstTime');?>">
                                </div>
                                <div class="form-group">
                                    <label for="">~</label>
                                    <input type="text" class="form-control" name="stopTime"
                                           value="<?php echo I('get.stopTime');?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">查询</button>
                        </form>
                        <table class="table table-hover text-center" style="margin-top: 5px">
                            <tbody>
                            <tr>
                                <th>商品ID</th>
                                <th>商品名称</th>
                                <th>商品价格</th>
                                <th>市场价格</th>
                                <th>是否上架</th>
                                <th>添加时间</th>
                                <th>操作事项</th>
                            </tr>
                            <?php foreach($data as $k=>$v): ?>
                            <tr>
                                <td> <?php echo $v['goods_id']; ?></td>
                                <td> <?php echo $v['goods_name']; ?></td>
                                <td> <?php echo $v['shop_price']; ?></td>
                                <td> <?php echo $v['market_price']; ?></td>
                                <td> <?php echo $v['is_on_sale']; ?></td>
                                <td> <?php echo $v['addtime']; ?></td>
                                <td>
                                    <a href="<?php echo U('edit?id='.$v['goods_id']);?>"
                                       class="label label-success">编辑</a>
                                    <a href="<?php echo U('del?id='.$v['goods_id']);?>"
                                       class="label label-danger">删除</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <?php echo $page;?>
                            </ul>
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
<script src="/Public/Admin/js/jQuery-2.2.0.min.js"></script>
<script src="/Public/Common/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/jquery.slimscroll.min.js"></script>
<script src="/Public/Admin/js/fastclick.min.js"></script>
<script src="/Public/Admin/js/app.min.js"></script>
<script src="//cdn.bootcss.com/holder/2.9.4/holder.min.js"></script>
</body>
</html>