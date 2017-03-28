<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"G:\xampp\htdocs\liangxing\public/../application/index\view\pro\pro.html";i:1490688215;s:77:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\header.html";i:1490688057;s:75:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\foot.html";i:1490596528;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>产品中心-<?php echo $system['title']; ?></title>
<meta name="keywords" content="<?php echo $system['keywords']; ?>">
<meta name="description" content="<?php echo $system['description']; ?>">
<link href="__home__/css/reset.css" rel="stylesheet">
<link href="__home__/css/thems.css" rel="stylesheet">
<link href="__home__/css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="__home__/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="__home__/css/swiper.min.css"/>
<script src="__home__/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="__home__/js/js_z.js"></script>

</head>
<body class="Inside">
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
<!--内容开始-->
<div class="box_banner"><img src="__home__/images/box_banner_product.jpg" ></div>
<div class="box-nav min-w">
  <div class="container"> <a onClick="javascript :history.back(-1);" class="m-left"> <span class="ico"></span> </a>
    <div class="m-right"> <span class="tit">产品中心</span> </div>
    <div class="nav nav-about">

    <a href="product.html">产品中心</a>
    <a href="projects.html">工程案例</a>
    </div>
    <div class="location">当前位置：首页 <i>></i> 产品&amp;案例 <i>></i> 产品中心</div>
  </div>
</div>
<script type="text/javascript">
  var boxnav='0';
  $('.nav-about a:eq('+boxnav+')').addClass("A");
</script>
<section class="product-box1 min-w clearfix">
  <div class="container">
    <div class="pro_menu">
     
       <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $k = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>

      <dl <?php if($v['id'] == $tid): ?>class="on"<?php endif; ?>>
        <dt><em class="icon<?php echo $k; ?>"></em><i></i><a class="show" href="/pro/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a></dt>
         <dd <?php if($v['id'] == $tid): ?>style="display:block;"<?php endif; ?> >
          <?php if(is_array($proall) || $proall instanceof \think\Collection || $proall instanceof \think\Paginator): $i = 0; $__LIST__ = $proall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == $v['id']): ?>
         <a <?php if($vo['id'] == $cid): ?>class="on"<?php endif; ?> href="/pro/<?php echo $v['id']; ?>/<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a>
           <?php endif; endforeach; endif; else: echo "" ;endif; ?>
         </dd>
      </dl>

      <?php endforeach; endif; else: echo "" ;endif; ?>
   
    </div>


    <script type="text/javascript">

    $('.pro_menu dt').click(function() {
      $(this).parent().toggleClass('on').siblings().removeClass('on');
      $(this).siblings('dd').slideToggle().parent().siblings('dl').find('dd').slideUp();
    });
    // 产品导航手机
  $('.pro_menu p').unbind('click').click(function(){
      if($(this).siblings('dl').is(':hidden')){
        var img=$('.arrow1',this).attr('src').replace('.png','_on.png');
        $('.arrow1',this).attr('src',img);
      }
      else{
        var img=$('.arrow1',this).attr('src').replace('_on.png','.png');
        $('.arrow1',this).attr('src',img);
      }
      $(this).siblings('dl').slideToggle();
    });



  </script>
    <div class="pro_list">
      <ul class="clearfix">

        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

        <li><a href="/proshow/<?php echo $v['id']; ?>" title="<?php echo $v['name']; ?>"><span class="img"><span></span><img src="__home__/images/5.jpg" title="<?php echo $v['name']; ?>"></span><?php echo $v['name']; ?></a></li>

        <?php endforeach; endif; else: echo "" ;endif; ?>
       
      </ul>
      <img id="pro_more" class="more1 btn" src="__home__/images/more.png"> </div>
    <script type="text/javascript">
    $('.pro_list ul li a').hover(function(){
    if($(this).find('.img p').length==0)$(this).find('.img').append('<p></p><span class="s1"><img src="__home__/images/pro_list_icon.png" /></span><span class="s2">查看链接</span>');
    $(this).find('.img p').stop().animate({'opacity':'0.5','top':'0px'},300); 
    $(this).find('.s1').stop().animate({'top':'60px'},200);
    $(this).find('.s2').stop().animate({'top':'132px'},400);
    },function(){
    $(this).find('.img p').stop().animate({'opacity':'0','top':'-230px'},250);
    $(this).find('.s1').stop().animate({'top':'235px'},350);
    $(this).find('.s2').stop().animate({'top':'400px'},160);
    });
    </script> 
  </div>
</section>
<!--内容结束-->

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