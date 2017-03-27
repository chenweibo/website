<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/www/wwwroot/o.dqzd.cpm/public/../application/index/view/pro/pro1.html";i:1489459323;s:75:"/www/wwwroot/o.dqzd.cpm/public/../application/index/view/public/header.html";i:1489459430;s:73:"/www/wwwroot/o.dqzd.cpm/public/../application/index/view/public/foot.html";i:1489212144;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
<title>产品中心-<?php echo $system['title']; ?></title>
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
                      <li><a href="/pro1/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a></li>
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
          <h1 class="page-title">全部产品</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Grey bg end --> 
  
  <!-- CONTENT -->
  <div class="container filter-portfolio clearfix">
    <ul id="portfolio" class="clearfix">

       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

      <!-- PORTFOLIO ITEM -->
      <li data-id="id-1" data-type="category1" class="one-third column m-bot-35">
        <div class="hover-item">
          <div class="view view-first"> <img src="/<?php echo $v['icon']; ?>" alt="Ipsum" >
            <div class="mask"></div>
          </div>
          <div class="lw-item-caption-container"> <a class="a-invert" href="/pro2/<?php echo $v['id']; ?>" >
            <div class="item-title-main-container clearfix">
              <div class="item-title-text-container"> <span class="bold"><?php echo $v['name']; ?> </div>
            </div>
            </a>
          </div>
        </div>
      </li>

         <?php endforeach; endif; else: echo "" ;endif; ?>



  
      
    </ul>

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

<!-- JS end -->
  <script type="text/javascript">
    
    $(".sf-menu li:eq(5)").addClass("current");
  </script>
</body>
</html>
