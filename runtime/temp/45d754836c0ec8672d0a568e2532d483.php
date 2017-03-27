<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"G:\xampp\htdocs\jiepai\public/../application/index\view\about\contact.html";i:1489214513;s:74:"G:\xampp\htdocs\jiepai\public/../application/index\view\public\header.html";i:1489367483;s:72:"G:\xampp\htdocs\jiepai\public/../application/index\view\public\foot.html";i:1489212143;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
<title>联系我们-<?php echo $system['title']; ?></title>
<meta charset=utf-8 >
<meta name="robots" content="index, follow" >
<meta name="keywords" content="<?php echo $system['keywords']; ?>" >
<meta name="description" content="<?php echo $system['description']; ?>" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="favicon.ico">

<!-- CSS begin -->

<link rel="stylesheet" type="text/css" href="__home__/css/style.css" >
<link rel="stylesheet" type="text/css" href="__home__/css/skeleton.css" >
<link rel="stylesheet" type="text/css" href="__home__/css/jquery.fancybox-1.3.4.css"  >
<link rel="stylesheet" href="__home__/css/switcher/style.css">
<link rel="stylesheet" href="__home__/css/layout/wide.css" id="layout">
<link rel="stylesheet" href="__home__/css/colors/yellow.css" id="colors">
<link rel="stylesheet" href="__home__/css/box.css" id="colors">

<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="__home__/css/ie-warning.css" ><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="__home__/css/style-ie.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="__home__/css/ei8fix.css" ><![endif]-->

<!-- CSS end -->

<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

</head>
<body>
<div id="wrap" class="boxed">
  <div class="grey-bg"> <!-- Grey bg  --> 
    
    <!-- HEADER -->
        <header id="header" >
      <div class="container clearfix">
        <div class="sixteen columns">
          <div class="header-container m-top-30 clearfix">
            <div class="header-logo-container ">
              <div class="logo-container"> <a href="index.html" class="logo" rel="home" title="Home"> <img src="__home__/images/logo-retina.png" alt="solana" > </a> </div>
            </div>
            <div class="header-menu-container right"> 
              <!-- TOP MENU -->
              <nav id="main-nav">
                <ul class="sf-menu clearfix">
                  <li><a href="/">Home</a></li>
                  <li ><a href="/about">关于杰派</a>
                    <ul>
                      <li><a href="/about">我们的概况</a></li>
                      <li><a href="/concept">我们的理念</a></li>
                      <li><a href="/products">我们的产品</a></li>
                    </ul>
                  </li>
                  <li><a href="/pro">产中中心</a>
                    <ul>
                    <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                      <li><a href="/pro/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                  </li>
                  <li><a href="/news">新闻资讯</a></li>
                  <li ><a href="/contact">联系我们</a></li>
                  <li ><a target="_blank" href="https://jiepai.1688.com/">阿里商城</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- PAGE TITLE -->
    <div class="container m-bot-35 clearfix">
      <div class="sixteen columns">
        <div class="page-title-container clearfix">
          <h1 class="page-title">联系我们</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Grey bg end --> 
  
  <!-- CONTACT FORM-->
  <div class="container clearfix">
    <div class="twelve columns  m-bot-35">
      <div class="caption-container-main m-bot-30">
        <div class="caption-text-container">信息反馈</div>
        <div class="content-container-white caption-bg "></div>
      </div>
      <div class="contact-form-container">
        <form action="" id="contact-form" method="post" class="clearfix">
          <fieldset class="field-1-3 left">
            <label>Name</label>
            <input type="text" name="name" id="Myname" onblur="if(this.value=='')this.value='姓名';" onfocus="if(this.value=='姓名')this.value='';" value="姓名" class="text requiredField m-bot-20" >
          </fieldset >
          <fieldset class="field-1-3 left">
            <label>Email</label>
            <input type="text" name="email" id="myemail"   onblur="if(this.value=='')this.value='邮箱';" onfocus="if(this.value=='邮箱')this.value='';" value="邮箱"  class="text requiredField email m-bot-20" >
          </fieldset>
          <fieldset class="field-1-3 left">
            <label>Subject</label>
            <input type="text" name="subject" id="mySubject"  onblur="if(this.value=='')this.value='问题';" onfocus="if(this.value=='问题')this.value='';" value="问题" class="text requiredField subject m-bot-20" >
          </fieldset>
          <fieldset class="field-1-1 left">
            <label>Message</label>
            <textarea name="message" id="Mymessage" rows="5" cols="30" class="text requiredField" onblur="if(this.value=='')this.value='备注';" onfocus="if(this.value=='备注')this.value='';"   >备注</textarea>
          </fieldset>
          <fieldset class="right m-t-min-1">
            <input name="Mysubmitted" id="Mysubmitted" value="提交" class="button medium" type="submit" >
          </fieldset>
        </form>
      </div>
    </div>
    
    <!-- SIDEBAR -->
    <div class="four columns  m-bot-25">
      <div class="caption-container-main m-bot-30">
        <div class="caption-text-container">联系方式</div>
        <div class="content-container-white caption-bg "></div>
      </div>
      <div style="line-height:25px;"> 地址：浙江省乐清市白石合湖工业区<br>
        电话：0577-61717980<br>
        传真：0577-61717985<br>
        手机：17757791181<br>
        QQ：1595365304<br>
        邮箱：sales@jacpack.com<br>
        网址：www.jacpack.cn</div>        
    </div>
    <div id="map" style="width:100%; height:400px; "></div>
  </div>
  
  <!-- LATEST WORK --> 
  
  <!-- FOOTER -->

     <footer>
    <div class="footer-copyright-bg">
      <div class="container ">
        <div class="sixteen columns clearfix">
          <div class="footer-menu-container"><a href="https://jiepai.1688.com" target="_blank"><img src="__home__/images/foot-img-0.jpg"></a></div>
          <div class="footer-copyright-container right-text"> Copyright &copy; 2017 温州杰派包装机械有限公司 All Rights Reserved 版权所有</div>
        </div>
      </div>
    </div>
  </footer>
  <p id="back-top"> <a href="#top" title="Back to Top"><span></span></a> </p>
</div>
<!-- End wrap --> 
<!-- JS begin --> 

<script type="text/javascript" src="__home__/js/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="__home__/js/superfish.js"></script> 
<script type="text/javascript" src="__home__/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.jcarousel.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.fancybox-1.3.4.pack.js"></script> 
<script type="text/javascript" src="__home__/js/jQuery.BlackAndWhite.min.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__home__/js/jflickrfeed.min.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.quicksand.js"></script> 
<script type="text/javascript" src="__home__/js/main.js"></script> 
<script type="text/javascript" src="__home__/js/jquery-cookie.js"></script> 
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KcuPrtmlz5QZHA8PRPAnhaxF"></script> 
<script type="text/javascript">
$(function(){
	var map = new BMap.Map("map");
	var point = new BMap.Point(120.875277,28.092361);
	map.centerAndZoom(point,19);
	var  mapStyle = {style:""};
	map.setMapStyle(mapStyle);
	map.addControl(new BMap.NavigationControl());
	var pt = new BMap.Point(120.875277,28.092361);
	var icon = new BMap.Icon("__home__/images/icon_map.png", new BMap.Size(72,81), {'anchor':new BMap.Size(16,81)});
	var marker = new BMap.Marker(pt,{icon:icon});
	map.addOverlay(marker);  
});  
</script> 

<!-- JS end -->
  <script type="text/javascript">
    
    $(".sf-menu li:eq(10)").addClass("current");
  </script>
</body>
</html>
