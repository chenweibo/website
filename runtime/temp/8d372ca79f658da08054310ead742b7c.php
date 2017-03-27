<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"G:\xampp\htdocs\jieapi\public/../application/index\view\index\index.html";i:1490332171;s:72:"G:\xampp\htdocs\jieapi\public/../application/index\view\public\foot.html";i:1489212144;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
<title><?php echo $system['title']; ?></title>
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

<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="__home__/css/ie-warning.css" ><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="__home__/css/style-ie.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="__home__/css/ei8fix.css" ><![endif]-->

<!-- flexslider slider CSS -->

<link rel="stylesheet" type="text/css" href="__home__/css/flexslider.css"  >

<!--end flexslider slider CSS -->

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
        <div class="sixteen columns header-position">
          <div class="header-container m-top-30 clearfix">
            <div class="header-logo-container ">
              <div class="header-logo-container ">

              <div class="logo-container"> <a href="/" class="logo" rel="home" title="Home"> <img src="__home__/images/logo-retina.png" alt="solana" > </a> </div>

            </div>
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

                        <li><a href="/<?php echo $v['jingtai']; ?>"><?php echo $v['name']; ?></a></li>

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
    <!-- SLIDER -->
    <div class="slider-1 clearfix">
      <div class="flex-container">
        <div class="flexslider loading">
          <ul class="slides">
            <li style="background:url(__home__/images/sliders/slider-1/slider-bg-1.jpg) no-repeat;background-position:50% 0">
              <div class="container">
                <div class="sixteen columns contain">
                  <h2 data-toptitle="36%"><img src="__home__/images/sliders/slider-1/slider-item-1-1.png" /></h2>
                  <p data-bottomtext="39%"><img src="__home__/images/sliders/slider-1/slider-item-1-2.png" /></p>
                  <!--<div class="links" data-bottomlinks="30%"> <a class="button medium r-m-plus r-m-full" href="blog-single.html">READ MORE</a> </div>--> 
                  <img src="__home__/images/sliders/slider-1/slider-item-1.png" class="item" alt="slide-item"  data-topimage="21%"/> </div>
              </div>
              <!-- End Container --> 
              
            </li>
            <!-- End item -->
            
          </ul>
        </div>
      </div>
    </div>
    <!-- End slider --> 
    
    <!-- 3 BLOCKS (1 ver) -->
    <div class="container clearfix m-bot-35 min-m-top-75">
      <div class="sixteen columns m-bot-15"> 
        <!-- BLOCK -->
        <div class="block-4-col m-bot-20 ca-menu">
          <div class="block-0-content-container">
            <div class="block-text"> 产品中心<br>
              <br>
              <strong>Product Center</strong>
              <hr>
            </div>
            <div class="block-r-m-container"> <a class="button medium r-m-plus r-m-full" href="pro">全部产品</a> </div>
          </div>
        </div>
        <!-- BLOCK -->
        <div class="block-4-col m-bot-20 ca-menu">
          <div class="block-1-content-container"> <a class=" clearfix" href="#">
            <div class="ca-icon"> <img src="__home__/images/icon-comp.png" alt="icon-comp"> </div>
            <div class="ca-content">
              <h2 class="ca-main"><span>灌装机</span></h2>
              <h3 class="ca-sub"><span>液体灌装机｜膏体灌装机｜全自动灌装机 半自动粉末灌装机｜半自动颗粒灌装机</span></h3>
            </div>
            </a> </div>
        </div>
        
        <!-- BLOCK -->
        <div class="block-4-col m-bot-20 ca-menu">
          <div class="block-2-content-container"> <a class=" clearfix" href="#">
            <div class="ca-icon"> <img src="__home__/images/icon-gears.png" alt="icon-gears"> </div>
            <div class="ca-content">
              <h2 class="ca-main"><span>封装机</span></h2>
              <h3 class="ca-sub"><span>塑杯封口机塑盒封｜口机塑盒气调封口机 全自动塑盒封口机</span></h3>
            </div>
            </a> </div>
        </div>
        <!-- BLOCK -->
        <div class="block-4-col m-bot-20 ca-menu">
          <div class="block-3-content-container"> <a class=" clearfix" href="#">
            <div class="ca-icon"> <img src="__home__/images/icon-plane.png" alt="icon-plane"> </div>
            <div class="ca-content">
              <h2 class="ca-main"><span>灌裝封口机</span></h2>
              <h3 class="ca-sub"><span>塑杯塑盒灌装封口机｜全自动包装机 塑桶灌装封口压盖机</span></h3>
            </div>
            </a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Grey bg end --> 
  
  <!-- BUY NOW -->
  
  <div class="dark-grey-bg">
    <div class="container  clearfix dark-grey-bg">
      <div class="sixteen columns">
        <div class="buy-container clearfix">
          <div class="buy-img-container"> <img src="__home__/images/icon-buy.png" alt="buy"> </div>
          <div class="buy-text-container">
            <div class="buy-text">
              <h2> <span class="bold">关于杰派</span> </h2>
              <span class="buy-now-slogan">ABOUT JACPACK</span> </div>
          </div>
          <div class="button-buy-container"> <a class="" href="/about">了解详情</a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- LATEST WORK -->
  <div class="container clearfix m-top-60">
    <div class="four columns carousel-intro m-bot-33">
      <div class="caption-container m-bot-20">
        <div class="title-block-text"><strong>温州市杰派包装机械有限公司</strong> 温州市杰派包装机械有限公司成立于2015年，是一家集研发，制造，销售为一体的科技公司。 </div>
        <img src="__home__/images/i_ewm.jpg"> </div>
    </div>
    
    <!-- jCAROUSEL -->
    <div class="jcarousel latest-work-jc m-bot-30" >
      <ul class="clearfix">
        <!-- LATEST WORK ITEM -->
        <li class="four columns">
          <div class="hover-item">
            <div class="view view-first"> <img src="__home__/images/content/port-2-1.jpg" alt="Ipsum" >
              <div class="mask"></div>
            </div>
            <div class="lw-item-caption-container"> <a class="a-invert" href="/concept" >
              <div class="item-title-main-container clearfix">
                <div class="item-title-text-container"> 我们的理念 </div>
              </div>
              </a>
              <div class="item-caption">我们以"客户的满意"作为我们的核心竞争力...</div>
            </div>
          </div>
        </li>
        
        <!-- LATEST WORK ITEM -->
        <li class="four columns">
          <div class=" hover-item">
            <div class="view view-first"> <img src="__home__/images/content/port-2-2.jpg" alt="Ipsum" >
              <div class="mask"></div>
            </div>
            <div class="lw-item-caption-container"> <a class="a-invert" href="/products" >
              <div class="item-title-main-container clearfix">
                <div class="item-title-text-container"> 我们的产品 </div>
              </div>
              </a>
              <div class="item-caption">我们通过多年的产品开发，制造和销售经验，使得我们能够...</div>
            </div>
          </div>
        </li>
        
        <!-- LATEST WORK ITEM -->
        <li class="four columns">
          <div class=" hover-item">
            <div class="view view-first"> <img src="__home__/images/content/port-2-3.jpg" alt="Ipsum" >
              <div class="mask"></div>
            </div>
            <div class="lw-item-caption-container"> <a class="a-invert" href="/about" >
              <div class="item-title-main-container clearfix">
                <div class="item-title-text-container"> 我们的概况 </div>
              </div>
              </a>
              <div class="item-caption">温州市杰派包装机械有限公司成立于2015年，是一家...</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- jCAROUSEL End --> 
  </div>
  <!-- OUR PROJECTS End --> 
  
  <!-- FEATURES 2 -->
  
  <div class="light-grey-bg m-top-30">
    <div class="container clearfix pad-t-b-30">
      <div class=" clearfix">
        <div class="eight columns">
          <div class="features-2-container-img"> <img src="__home__/images/features-icon.png" alt="features"> </div>
        </div>
        <div class="four columns features-demo">
          <div class="features-2-text">地址：浙江省乐清市白石合湖工业区<br>
            电话：0577-61717980<br>
            传真：0577-61717985</div>
        </div>
        <div class="four columns features-demo">
          <div class="features-2-text">手机：17757791181<br>
            QQ：1595365304<br>
            邮箱：sales@jacpack.com</div>
        </div>
        <div class="one-five columns columns features-demo"><a href="/contact"><img src="__home__/images/i_map.png"></a></div>
      </div>
    </div>
  </div>
  
  <!-- LATEST NEWS -->
  <div class="container clearfix m-top-60">
    <div class="four columns carousel-intro m-bot-33">
      <div class="caption-container m-bot-20">
        <div class="title-block-text-news"><strong>新闻资讯</strong> <br>
          NEW AND information </div>
        <!--<div class="carousel-navi jcarousel-scroll">
          <div class="jcarousel-prev"></div>
          <div class="jcarousel-next"></div>
        </div> -->
      </div>
    </div>
    
    <!-- jCAROUSEL -->
    <div class="jcarousel latest-posts-jc m-bot-50" >
      <ul class="clearfix">
        <!-- LATEST NEWS ITEM -->

        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <li class="four columns">
          <div class="hover-item">
            <div class="view view-first"> <img src="__home__/images/content/post-2-1.jpg" alt="Ipsum" >
              <div class="mask"></div>
            </div>
            <div class="lp-item-caption-container"> <a class="a-invert" href="/news_show/<?php echo $v['id']; ?>" ><?php echo $v['name']; ?></a>
              <div class="lp-item-container-border clearfix">
                <div class="lp-item-info-container"> <?php echo date("Y-m-d",$v['createtime']); ?> </div>
              </div>
            </div>
          </div>
          <div class="lp-item-text-container">
            <p><?php echo strip_tags($v['info']); ?>...</p>
          </div>
          <div class="lp-r-m-container"> <a href="/news_show/<?php echo $v['id']; ?>" class="r-m-plus-small">READ MORE</a> </div>
        </li>
       <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- jCAROUSEL End --> 
  </div>
  <!-- OUR NEWS End --> 
  
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
<!-- Flex Slider  --> 
<script src="__home__/js/jquery.flexslider.js"></script> 
<script src="__home__/js/flex-slider.js"></script> 
<!-- end Flex Slider --> 
<script type="text/javascript" src="__home__/js/jquery.jcarousel.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.fancybox-1.3.4.pack.js"></script> 
<script type="text/javascript" src="__home__/js/jQuery.BlackAndWhite.min.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__home__/js/jflickrfeed.min.js"></script> 
<script type="text/javascript" src="__home__/js/jquery.quicksand.js"></script> 
<script type="text/javascript" src="__home__/js/main.js"></script> 
<script type="text/javascript" src="__home__/js/jquery-cookie.js"></script>
</body>
</html>
