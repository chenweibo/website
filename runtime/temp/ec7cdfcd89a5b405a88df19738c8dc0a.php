<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"G:\xampp\htdocs\liangxing\public/../application/index\view\about\about.html";i:1490667100;s:77:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\header.html";i:1490688057;s:75:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\foot.html";i:1490596528;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>关于我们-<?php echo $system['title']; ?></title>
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
<body class="Inside" >
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
    <div class="m-right"> <span class="tit">公司介绍</span> </div>
    <div class="nav nav-about"><a href="about.html">公司介绍</a><a href="culture.html">公司文化</a><a href="organizational.html">组织架构</a><a href="ceo.html">董事长寄语</a></div>
    <div class="location">当前位置：首页 <i>></i> 关于良信 <i>></i> 公司介绍</div>
  </div>
</div>
<script type="text/javascript">
  var boxnav='0';
  $('.nav-about a:eq('+boxnav+')').addClass("A");
</script>
<div class="bout container"><img src="http://www.cnlxdq.com/images/11.jpg" alt="公司概况" width="253" height="374" style="float:left;margin-right:10px;" /> 
  <p>
    中国&#9642;良信电器是一家专注于高低压电器制造的公司，主要产品涉及高低断路器、交流接触器、光伏专用直流部件、双电源自动转换开关、KBO、高低压成套、真空断路器的研发和制造的高科技企业。公司拥有一批高素质的技术和管理人才，现有员工400余人，中高级以上职称达30余人，大中专及以上学历者占50%以上。公司拥有先进的制造设备和国内一流的制造工艺，拥有先进的产品检试验中心，数控机床生产线、数十台注塑机生产线。公司凭借专业的技术基础，丰富的管理经验，先进的制造设备和对国际电气流行趋势的正确把握，为客户生产出工艺精湛，品质卓越，外形典雅和安全耐用的电气产品。公司在生产经营过程中严格执行国标、IS090001质量体系标准及相应标准，拥有CCC、UL、CB、KAMA、SEMKO、CE有效地保证了产品的质量、可靠性。
  </p>
  <p>
    公司采用现代信息管理技术，全面推行ERP管理系统和PDM系统（产品数据管理系统），极大提高了公司的管理能力及反应能力，体现了一个现代企业的管理水平。
  </p>
  <p>
    公司遵循“引领高端，立足用户，用心服务，持续创新”的企业理念，不断为用户创造价值，开辟双赢局面，将以不断健全的技术创新体系、不断完善的质量保证体系和不断超越的售后服务体系为用户提供个性化的终极服务。
  </p>
  <p>
    公司始终坚持”追求品质卓越，持久地为用户提供优质产品和满意服务“的质量方针。公司销售与服务网络遍及全国及海外部分地区。产品得到海内外用户的广泛赞誉。
    中国&#9642;良信电器服务世界高低压智能电网！良信人将以敏锐的目光、昂扬的姿态面向世界，面向一个更加广阔的时代和未来！
  </p>
</div>
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