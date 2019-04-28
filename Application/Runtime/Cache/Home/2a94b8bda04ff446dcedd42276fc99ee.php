<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>商品列表页</title>
    <link rel="stylesheet" href="/Public/Home/css/base.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/global.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/header.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/footer.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/list.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/common.css" type="text/css">
</head>
<body>
<!-- 顶部导航 start -->
<div class="topnav">
    <div class="topnav_bd w990 bc">
        <div class="topnav_right fr">
            <ul>
                <li>您好，欢迎来到糖糖花店！[<a href="login.html">登录</a>] [<a href="register.html">免费注册</a>] </li>
                <li class="line">|</li>
                <li>我的订单</li>
                <li class="line">|</li>
                <li>客户服务</li>

            </ul>
        </div>
    </div>
</div>
<!-- 顶部导航 end -->
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<!-- 头部 start -->
<div class="header w1210 bc mt15">
    <!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
<div class="logo w1210">
    <h1 class="fl"><a href="index.html"><img src="images/logo.png" alt="糖糖花店"></a></h1>
    <!-- 头部搜索 start -->
    <div class="search fl">
        <div class="search_form">
            <div class="form_left fl"></div>
            <form action="" name="serarch" method="get" class="fl">
                <input type="text" class="txt" value="请输入你想要订购的鲜花"/><input type="submit" class="btn" value="搜索"/>
            </form>
            <div class="form_right fl"></div>
        </div>
    </div>
    <!-- 头部搜索 end -->
    <!-- 用户中心 start-->
    <div class="user fl">
        <dl>
            <dt>
                <em></em>
                <a href="">用户中心</a>
                <b></b>
            </dt>
            <dd>
                <div class="prompt">
                    您好，请<a href="">登录</a>
                </div>
                <div class="uclist mt10">
                    <ul class="list1 fl">
                        <li><a href="">用户信息></a></li>
                        <li><a href="">我的订单></a></li>
                        <li><a href="">收货地址></a></li>
                    </ul>

                    <ul class="fl">
                        <li><a href="">我的留言></a></li>
                        <li><a href="">我的评论></a></li>
                    </ul>

                </div>
                <div style="clear:both;"></div>

            </dd>
        </dl>
    </div>
    <!-- 用户中心 end-->

    <!-- 购物车 start -->
    <div class="cart fl">
        <dl>
            <dt>
                <a href="/index.php/Home/Index/shoppingCart.html">去购物车结算</a>
                <b></b>
            </dt>
            <dd>
                <div class="prompt">
                    购物车中还没有商品，赶紧选购吧！
                </div>
            </dd>
        </dl>
    </div>
    <!-- 购物车 end -->
</div>
<!-- 头部上半部分 end -->
</div>
<div style="clear:both;"></div>
<div class="list w1210 bc mt10">
    <div class="breadcrumb">
        <h2>当前位置：<a href="">首页</a> > <a href="">鲜花列表</a></h2>
    </div>
    <div class="list_left fl mt10">

    </div>
    <div class="list_bd fl ml10 mt10">
        <div class="filter mt10">
            <h2><a href="">重置筛选条件</a> <strong>商品筛选</strong></h2>
            <div class="filter_wrap">
                <dl>
                    <dt>品牌：</dt>
                    <dd class="cur"><a href="">不限</a></dd>
                    <dd><a href="">联想（ThinkPad）</a></dd>
                    <dd><a href="">联想（Lenovo）</a></dd>
                    <dd><a href="">宏碁（acer）</a></dd>
                    <dd><a href="">华硕（ASUS）</a></dd>
                    <dd><a href="">戴尔（DELL）</a></dd>
                    <dd><a href="">索尼（SONY）</a></dd>
                    <dd><a href="">惠普（HP）</a></dd>
                    <dd><a href="">三星（SAMSUNG）</a></dd>
                    <dd><a href="">优派（ViewSonic）</a></dd>
                    <dd><a href="">苹果（Apple）</a></dd>
                    <dd><a href="">富士通（Fujitsu）</a></dd>
                </dl>
                <dl>
                    <dt>价格：</dt>
                    <dd class="cur"><a href="">不限</a></dd>
                    <dd><a href="">1000-1999</a></dd>
                    <dd><a href="">2000-2999</a></dd>
                    <dd><a href="">3000-3499</a></dd>
                    <dd><a href="">3500-3999</a></dd>
                    <dd><a href="">4000-4499</a></dd>
                    <dd><a href="">4500-4999</a></dd>
                    <dd><a href="">5000-5999</a></dd>
                    <dd><a href="">6000-6999</a></dd>
                    <dd><a href="">7000-7999</a></dd>
                </dl>

                <dl>
                    <dt>尺寸：</dt>
                    <dd class="cur"><a href="">不限</a></dd>
                    <dd><a href="">10.1英寸及以下</a></dd>
                    <dd><a href="">11英寸</a></dd>
                    <dd><a href="">12英寸</a></dd>
                    <dd><a href="">13英寸</a></dd>
                    <dd><a href="">14英寸</a></dd>
                    <dd><a href="">15英寸</a></dd>
                </dl>

                <dl class="last">
                    <dt>处理器：</dt>
                    <dd class="cur"><a href="">不限</a></dd>
                    <dd><a href="">intel i3</a></dd>
                    <dd><a href="">intel i5</a></dd>
                    <dd><a href="">intel i7</a></dd>
                    <dd><a href="">AMD A6</a></dd>
                    <dd><a href="">AMD A8</a></dd>
                    <dd><a href="">AMD A10</a></dd>
                    <dd><a href="">其它intel平台</a></dd>
                </dl>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div class="sort mt10">
            <dl>
                <dt>排序：</dt>
                <dd class="cur"><a href="">销量</a></dd>
                <dd><a href="">价格</a></dd>
                <dd><a href="">评论数</a></dd>
                <dd><a href="">上架时间</a></dd>
            </dl>
        </div>
        <div style="clear:both;"></div>
        <div class="goodslist mt10">
            <ul>
                <li>
                    <dl>
                        <dt><a href=""><img src="images/goods1.jpg" alt=""/></a></dt>
                        <dd><a href="">清华同方精锐X2 台式电脑（双核E3500 2G 500G DVD 键鼠）带20英寸显示器</a>
                        </dt>
                        <dd><strong>￥2399.00</strong>
                        </dt>
                        <dd><a href=""><em>已有10人评价</em></a>
                        </dt>
                    </dl>
                </li>

                <li>
                    <dl>
                        <dt><a href=""><img src="images/goods2.jpg" alt=""/></a></dt>
                        <dd><a href="">富士通LH531 14.1英寸笔记本电脑（i3-2350M 2G 320G 第二代核芯显卡 D刻</a></dd>
                        <dd><strong>￥2999.00</strong></dd>
                        <dd><a href=""><em>已有5人评价</em></a></dd>
                    </dl>
                </li>

                <li>
                    <dl>
                        <dt><a href=""><img src="images/goods3.jpg" alt=""/></a></dt>
                        <dd><a href="">三星Galaxy Tab P6800 7.7英寸 3G手机版 蓝牙3.0 魔丽屏 金属银</a></dd>
                        <dd><strong>￥4699.00</strong></dd>
                        <dd><a href=""><em>已有34人评价</em></a></dd>
                    </dl>
                </li>

                <li>
                    <dl>
                        <dt><a href=""><img src="images/goods4.jpg" alt=""/></a></dt>
                        <dd><a href="">宏碁AS4739-382G32Mnkk 14英寸笔记本电脑（i3-380M 2G 320G D刻 LED背</a></dd>
                        <dd><strong>￥2799.00</strong></dd>
                        <dd><a href=""><em>已有17人评价</em></a></dd>
                    </dl>
                </li>

                <li>
                    <dl>
                        <dt><a href=""><img src="images/goods5.jpg" alt=""/></a></dt>
                        <dd><a href="">ThinkPad E42014英寸笔记本电脑（i5-2450M 2G 320G 蓝牙 摄像头）</a></dd>
                        <dd><strong>￥4199.00</strong></dd>
                        <dd><a href=""><em>已有8人评价</em></a></dd>
                    </dl>
                </li>

                <li>
                    <dl>
                        <dt><a href=""><img src="images/goods6.jpg" alt=""/></a></dt>
                        <dd><a href="">惠普G4-1332TX 14英寸笔记本电脑 （i5-2450M 2G 500G 7450M 1G独显 D刻</a></dd>
                        <dd><strong>￥2999.00</strong></dd>
                        <dd><a href=""><em>已有22人评价</em></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<!-- 底部版权 start -->
<div class="footer w1210 bc mt15">
    <p class="links">
        <a href="">关于我们</a> |
        <a href="">联系我们</a> |
        <a href="">商家入驻</a> |
        <a href="">广告服务</a> |
        <a href="">友情链接</a> |
    </p>
    <p class="copyright">
        © 2019-2020 糖糖花店 版权所有
    </p>
</div>
<!-- 底部版权 end -->
<script type="text/javascript" src="/Public/Admin/js/jQuery-2.2.0.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/header.js"></script>
<script type="text/javascript" src="/Public/Home/js/list.js"></script>
</body>
</html>