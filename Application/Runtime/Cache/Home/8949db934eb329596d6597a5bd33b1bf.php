<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>爱情鲜花</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/Public/Home/css/home.css">

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
        <ol class="breadcrumb">
            <li><a href="">订单 /</a></li>
        </ol>
        <div class="col-md-4" style="">
            <form action="/index.php/Home/index/order/id/23" method="post">
                <div class="form-group">
                    <label for="">收花人姓名</label>
                    <input type="text" name="reveive_name" class="form-control" id="" placeholder="请输入收花人姓名">
                </div>
                <div class="form-group">
                    <label for="">收花人手机号</label>
                    <input type="text" name="reveive_tel" class="form-control" id="" placeholder="请输入收花人手机号">
                </div>
                <div class="form-group">
                    <label for="">收花人所在省</label>
                    <input type="text" name="reveive_province" class="form-control" id="" placeholder="请输入收花人所在省">
                </div>
                <div class="form-group">
                    <label for="">收花人所在市</label>
                    <input type="text" name="reveive_city" class="form-control" id="" placeholder="请输入收花人所在市">
                </div>
                <div class="form-group">
                    <label for="">收花人所在县</label>
                    <input type="text" name="reveive_area" class="form-control" id="" placeholder="请输入收花人所在县">
                </div>
                <div class="form-group">
                    <label for="">收花人详细地址</label>
                    <input type="text" name="reveive_addr" class="form-control" id="" placeholder="请输入收花人详细地址">
                </div>
                <input hidden="hidden" type="text" name="member_id" value="<?php echo session('m_id');?>">
<!--                <input hidden type="text" name="pay_time">-->
                <table class="table table-hover">
                    <tr>
                        <td>商品名称</td>
                        <td>商品价格</td>
                        <td>商品数量</td>
                        <td>总价</td>
                    </tr>
                    <tr>
                        <td><?php echo $goods_data['goods_name']?></td>
                        <td><img src="/Public/Uploads/<?php echo $goods_data['sm_logo']?>" alt=""
                                 class="img-responsive img-thumbnail"
                                 data-bd-imgshare-binded="1"></td>
                        <td>
                            <input type="text" size="3">
                        </td>
                        <td><?php echo $goods_data['shop_price']?></td>
                    </tr>
                </table>
                <input class="pull-right btn btn-primary" style="background: red" type="submit" value="结算">
            </form>
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
        $("#birflower").addClass("light");
        $("#bircolor").addClass("lovecolor");
    });
</script>
</html>