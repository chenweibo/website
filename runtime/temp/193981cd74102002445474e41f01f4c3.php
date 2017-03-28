<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"G:\xampp\htdocs\liangxing\public/../application/index\view\index\index.html";i:1490596548;s:77:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\header.html";i:1490688057;s:75:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\foot.html";i:1490596528;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $system['title']; ?></title>
<meta name="keywords" content="<?php echo $system['keywords']; ?>">
<meta name="description" content="<?php echo $system['description']; ?>">
<link href="__home__/css/reset.css" rel="stylesheet">
<link href="__home__/css/thems.css" rel="stylesheet">
<link href="__home__/css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="__home__/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="__home__/css/swiper.min.css"/>
<script src="__home__/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="__home__/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="__home__/js/js_z.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="__home__/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__home__/js/bootstrap.min.js"></script>
</head>
<body >
<!--头部-->
 <div class="header">
  <div class="head clearfix">
    <div class="logo"><a href="/"><img src="__home__/images/logo.png" alt="良信"/></a></div>
    <div class="nav_m">
      <div class="n_icon">导航栏</div>
      <ul class="nav clearfix">
        <li id="menuA"><a href="/pro" class="icon">产品&amp;案例</a>
          <div class="menuson">

       <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $k = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
            <dl>
              <dt><a href="/pro/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a></dt>
      
           <?php if(is_array($proall) || $proall instanceof \think\Collection || $proall instanceof \think\Paginator): $i = 0; $__LIST__ = $proall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == $v['id']): ?>
              <dd><a href="/pro/<?php echo $v['id']; ?>/<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></dd>

 <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      
          
            </dl>
        <?php endforeach; endif; else: echo "" ;endif; ?>

           
          </div>
        </li>
        <li><a href="/about">关于良信</a></li>
        <li><a href="/news" >新闻专区</a></li>
        <li><a href="/service" >服务中心</a></li>
        <li><a href="/contact">联系我们</a></li>
      </ul>
    </div>
    <div class="search">
      <form id="formsear" name="formsear" method="post" action="search.html"  onsubmit="if(document.getElementById('topkeys').value==''){alert('请输入产品关键词，进行查找！');return false;}">
        <input name="keys" id="topkeys" type="text">
        <input name="" type="submit" value="">
      </form>
    </div>
  </div>
</div>
<div class="header-bg"></div>
<section class="swiper-container " id="t-ban">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="__home__/images/banner.jpg"/></div>
    <div class="swiper-slide"><img src="__home__/images/banner.jpg"/></div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</section>

<!--首页焦点图 JS--> 
<script>
  var swiper = new Swiper('#t-ban', {
    pagination: '#t-ban .swiper-pagination',
    paginationClickable: true,
    loop : true,
  });
</script> 
<!--头部-->
<div class="i_pro">
  <div class="container clearfix">
    <div class="i_pro_search">
      <p><img src="__home__/images/i_pro_series.png" ></p>
      <div class="search">
        <form id="formsear" name="formsear" method="post" action="search.html"  onsubmit="if(document.getElementById('i_pro_keys').value==''){alert('请输入产品关键词，进行查找！');return false;}">
          <input name="keys" id="i_pro_keys" type="text" >
          <input type="submit" value="搜索">
        </form>
      </div>
    </div>
    <ul class="i_pro_list">
      <li><a href="javascript:void(0);"><span class="icon icon1"></span><span class="text">充电桩</span></a></li>
      <li><a href="javascript:void(0);"><span class="icon icon2"></span><span class="text">光伏应用产品</span></a></li>
      <li><a href="javascript:void(0);"><span class="icon icon3"></span><span class="text">高压电器</span></a></li>
      <li><a href="javascript:void(0);"><span class="icon icon4"></span><span class="text">低压电器</span></a></li>
    </ul>
  </div>
</div>
<div class="development_text container show"> <a href="">预付费断路器</a><a href="">塑壳式断路器系列</a><a href="">万能式断路器系列</a><a href="">双电源系列</a><a href="">自动重合闸</a><a href="">交流接触器</a><a href="">JP柜</a><a href="">户外综合配电柜</a><a href="">非智能电表箱</a><a href="">PXD2 电能计量箱</a><a href="">SXD2 电能计量箱</a> </div>
<div class="development_text container"> <a href="">预付费断路器</a><a href="">塑壳式断路器系列</a></div>
<div class="development_text container"><a href="">双电源系列</a><a href="">自动重合闸</a><a href="">交流接触器</a><a href="">JP柜</a><a href="">户外综合配电柜</a><a href="">非智能电表箱</a><a href="">PXD2 电能计量箱</a><a href="">SXD2 电能计量箱</a> </div>
<div class="development_text container"> <a href="">户外综合配电柜</a><a href="">非智能电表箱</a><a href="">PXD2 电能计量箱</a><a href="">SXD2 电能计量箱</a> </div>

<script>
//新闻切换
$(".i_pro_list li").click(function(e) {
  $(this).addClass("licur").siblings().removeClass("licur");
  var $xz=$("div.development_text").eq($(".i_pro_list li").index(this));
  $xz.addClass("show").siblings().removeClass("show");
});
</script> 
<!--  -->
<div class="container clearfix hb-list ">
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-container" id="hb-img">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><a href="#"><img src="__home__/images/1.jpg"/><span>良信直流汇流箱</span></a></div>
      <div class="swiper-slide"><a href="#"><img src="__home__/images/2.jpg"/><span>良信光伏并网箱</span></a></div>
      <div class="swiper-slide"><a href="#"><img src="__home__/images/3.jpg"/><span>电能表外置断路器</span></a></div>
      <div class="swiper-slide"><a href="#"><img src="__home__/images/1.jpg"/><span>良信直流汇流箱</span></a></div>
      <div class="swiper-slide"><a href="#"><img src="__home__/images/2.jpg"/><span>良信光伏并网箱</span></a></div>
      <div class="swiper-slide"><a href="#"><img src="__home__/images/3.jpg"/><span>电能表外置断路器</span></a></div>
    </div>
  </div>
</div>
<script>
  var swiper = new Swiper('#hb-img', {
    pagination: '#hb-img .swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 3,
    spaceBetween: 0,
    breakpoints: {
      990: {
        slidesPerView: 2,
      },
      640: {
        slidesPerView: 1,
      }
    }
  });
</script>
<div class="container clearfix">
  <div class="i_news">
    <div class="news-img bounceInRight">
      <div class="swiper-container" id="news-imgfoc">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="#"><img src="__home__/images/4.jpg"/><span><i></i><b>新闻专区</b> | 习近平画出的最美同心圆</span></a></div>
          <div class="swiper-slide"><a href="#"><img src="__home__/images/4.jpg"/><span><i></i><b>新闻专区</b> | 习近平画出的最美同心圆</span></a></div>
          <div class="swiper-slide"><a href="#"><img src="__home__/images/4.jpg"/><span><i></i><b>新闻专区</b> | 习近平画出的最美同心圆</span></a></div>
          <div class="swiper-slide"><a href="#"><img src="__home__/images/4.jpg"/><span><i></i><b>新闻专区</b> | 习近平画出的最美同心圆</span></a></div>
          <div class="swiper-slide"><a href="#"><img src="__home__/images/4.jpg"/><span><i></i><b>新闻专区</b> | 习近平画出的最美同心圆</span></a></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
  <div class="i_about"><img src="__home__/images/i_about.jpg"/><a href="#"><span><i></i><b>关于良信</b> ｜ 中国▪良信电器是一家专注于高低压电器制造的公司，主要产品涉及</span></a></div>
</div>
<!--首页新闻图片 JS--> 
<script>
  var swiper = new Swiper('#news-imgfoc', {
    pagination: '#news-imgfoc .swiper-pagination',
    paginationClickable: '#news-imgfoc .swiper-pagination',
    nextButton: '#news-imgfoc .swiper-button-next',
    prevButton: '#news-imgfoc .swiper-button-prev',
    spaceBetween: 30
  });
</script>
 <div class="foot">
  <div class="container foot_t clearfix">
    <div class="left">
      <ul class="nav">
        <li><span>产品&amp;案例</span><a href="product.html">产品中心</a>｜<a href="projects.html">工程案例</a></li>
        <li><span>服务中心</span><a href="service.html">技术支持</a>｜<a href="aftersales.html">售后服务</a>｜<a href="certificate.html">资质证书</a></li>
        <li><span>关于良信</span><a href="about.html">公司介绍</a>｜<a href="culture.html">公司文化</a>｜<a href="organizational.html">组织架构</a>｜<a href="ceo.html">董事长寄语</a></li>
        <li><span>联系我们</span><a href="contact.html">联系方式</a>｜<a href="contact.html">地图导航</a>｜<a href="feedback.html">客户留言</a></li>
        <li><span>新闻专区</span><a href="industry.html">行业快讯</a>｜<a href="news.html">公司动态</a></li>
      </ul>
    </div>
    <div class="right">
      <div class="ewm"><a><img src="__home__/images/ewm_icon.png"><img src="__home__/images/ewm_icon1.png" class="show" ></a></div>
      <div class="link"><span>友情链接：</span><a href="#">阿里商城</a><a href="#">招聘岗位</a></div>
    </div>
  </div>
  <hr>
  <div class="container foot_b clearfix">COPYRIGHT © 2017 中国·良信电器 ALL RIGHTS RESERVED 版权所有<span>浙ICP备 20150103 号</span></div>
</div>
</body>
</html>