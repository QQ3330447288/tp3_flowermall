<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>爱情鲜花</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/Public/Home/css/home.css">

    <style rel="stylesheet">
        .light{
               background: #f46;
        }
        .lovecolor{
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default" style="min-height:30px;line-height: 30px">
    <div class="container">
        <div class="row" style="font-size: 12px;">
            <div class="col-md-5">
                <?php if(session('m_id')): ?>
                您好，欢迎<?php echo session('m_username');?>的到来！
                [<a href="<?php echo U('Member/logout');?>">退出</a>]
                <?php else:?>
                您好，欢迎来到鲜花商城！<a href="<?php echo U('Member/login');?>">请登录</a>&nbsp;|&nbsp;<a
                    href="<?php echo U('Member/register');?>">免费注册</a>
                <?php endif;?>
            </div>
            <div class="col-md-2 pull-right text-right">
                <a href="/index.php/Home/index/cart">购物车</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
<!--        <form class="navbar-form navbar-left" role="search">-->
<!--            <div class="form-group input-group">-->
<!--                <input type="text" size="60" class="form-control" placeholder="百合" id="searchArt" style="border-color: #f46;-->
<!--    border-width: 2px;">-->
<!--                <span class="input-group-btn">-->
<!--                        <a class="btn btn-default" id="search" style="border-color: #f46;-->
<!--    border-width: 1px;background:#f46;color:#FFFFFF; ">搜索</a>-->
<!--                </span>-->
<!--            </div>-->
<!--        </form>-->
    </div>
    <div class="col-md-3 text-right">
        <a href="/index.php/Home/index/orderlst"><img src="http://cdn.huaduocai.net/Storage/logo/1/5057119636264957.png" width="130" height="40"></a>
    </div>
</div>
<div class="row" style="margin-top: 20px">
    <ul class="nav nav-pills nav-justified">
        <li role="presentation" id="allflower"><a href="/index.php/Home" id="allcolor">全部鲜花</a></li>
        <li role="presentation" id="loveflower"><a href="/index.php/Home/index/loveflower" id="lovecolor">爱情鲜花</a></li>
        <li role="presentation" id="birflower"><a href="/index.php/Home/index/birflower"  id="bircolor">生日鲜花</a></li>
<!--        <li role="presentation" id="openflower"><a href="/index.php/Home/index/openflower"  id="opencolor">开业花篮</a></li>-->
        <li role="presentation" id="liveflower"><a href="/index.php/Home/index/liveflower" id="livecolor">永生花</a></li>
        <li role="presentation" id="blueflower"><a href="/index.php/Home/index/blueflower"  id="bluecolor">绿植</a></li>
        <li role="presentation" id="highendflower"><a href="/index.php/Home/index/highendflower"  id="highendcolor">高端鲜花</a></li>
<!--        <li role="presentation"><a href="#" style="color: #666;">精品鲜花</a></li>-->
    </ul>
    <hr style="border-width:5px;border-top:3px solid #f46;margin-top: 0;margin-bottom:3px;">
</div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:#f46;font-weight: bold;background-color: #fff;">热门推荐</div>
                <div class="panel-body">
                    <?php foreach($hot as $k=>$v):?>
                    <ul class="list-group">
                        <div class="row">
                            <a href="/index.php/Home/index/goods/id/<?php echo $v['goods_id']?>">
                                <div class="col-md-6">
                                    <img src="/Public/Home/images/tmp1.jpg" width="50px" alt="1">
                                </div>
                            </a>
                            <div class="col-md-6">
                                <span style="font-size: 12px"> <?php echo $v['goods_name']; ?></span>
                                <p style="color: #f46;font-size: 12px">￥  <?php echo $v['shop_price']; ?><br></p>
                            </div>
                        </div>
                    </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <ul class="list-group">
                <li class="list-group-item" style="background: #f7f7f7">
                    <span style="color:#f46;font-weight: bold">价格:</span>
                    <a href="javascript:;" class="btn btn-default">
                        价格 <span class="glyphicon glyphicon-arrow-up" style="color: #f46"></span>
                    </a>
                    &nbsp; &nbsp;
                    <a href="javascript:;" class="btn btn-default">
                        价格 <span class="glyphicon glyphicon-arrow-down" style="color: #f46"></span>
                    </a>
                </li>
                <li class="list-group-item" style="background: #f7f7f7">
                    <span style="color:#f46;font-weight: bold">排序:</span>
                    <a href="javascript:;" class="btn btn-default">
                        销量 <span class="glyphicon glyphicon-arrow-up" style="color: #f46"></span>
                    </a>
                    &nbsp;&nbsp;
                    <a href="javascript:;" class="btn btn-default">
                        销量 <span class="glyphicon glyphicon-arrow-down" style="color: #f46"></span>
                    </a>
                    &nbsp;&nbsp;
                    <a href="javascript:;" class="btn btn-default">
                        时间 <span class="glyphicon glyphicon-arrow-up" style="color: #f46"></span>
                    </a>
                    &nbsp;&nbsp;
                    <a href="javascript:;" class="btn btn-default">
                        时间 <span class="glyphicon glyphicon-arrow-down" style="color: #f46"></span>
                    </a>
                </li>
            </ul>
            <div class="panel-body text-center">
                <?php foreach($data as $k=>$v):?>
                <div class="col-md-3" style="padding: 5px">
                    <a href="/index.php/Home/index/goods/id/<?php echo $v['goods_id']?>">
                        <img src="/Public/Uploads/<?php echo $v['big_logo']?>" alt=""
                             class="img-responsive img-thumbnail"
                             data-bd-imgshare-binded="1">
<!--                        <?php echo $v['cate_id'];?>-->
<!--                        <?php echo $v['cate_name'];?>-->
<!--                        <?php echo $v['id'];?>-->
                    </a>
                    <p> <?php echo $v['goods_name']; ?><span
                            style="color: #f46;font-weight: bold">￥<?php echo $v['shop_price']; ?></span></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <hr style="border-width: 2px">
<div class="row" style="margin-bottom: 30px;margin-top: 30px">
    <!-- 底部版权 start -->
    <div class="text-center">
        <p>
            <a href="">关于我们</a> |
            <a href="">联系我们</a> |
            <a href="">商家入驻</a> |
            <a href="">广告服务</a> |
            <a href="">友情链接</a> |
        </p>
        <p class="copyright">
            © 2019-2020 xxx鲜花店 版权所有
        </p>
    </div>
    <!-- 底部版权 end -->
</div>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#highendflower").addClass("light");
        $("#highendcolor").addClass("lovecolor");
    });
</script>
</html>