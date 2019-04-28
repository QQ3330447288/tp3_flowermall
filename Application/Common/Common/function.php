<?php
//有选择地过滤XSS说明性能非常低，尽量少用
function removeXSS($data)
{
    require_once './htmlPurifier/HTMLPurifier.auto.php';
    // 生成配置对象
    $cfg = HTMLPurifier_Config::createDefault();
    // 以下就是配置：
    $cfg->set('Core.Encoding', 'UTF-8');
    // 设置允许使用的HTML标签
    $cfg->set('HTML.Allowed', 'div,b,strong,i,em,a[href|title],ul,ol,li,br,span[style],img[width|height|alt|src]');
    // 设置允许出现的CSS样式属性
    $cfg->set('CSS.AllowedProperties', 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');
    // 设置a标签上是否允许使用target="_blank"
    $cfg->set('HTML.TargetBlank', TRUE);
    // 使用配置生成过滤用的对象
    $obj = new HTMLPurifier($cfg);
    // 过滤字符串
    return $obj->purify($data);
}

function showImages($url, $width = '', $height = '')
{
    if ($width)
        $width = "width='$width'";
    if ($height)
        $height = "height='$height'";

    $ic = C('IMAGE_CONFIG');
    echo "<img $width $height src='{$ic['viewPath']}$url'/>";
}