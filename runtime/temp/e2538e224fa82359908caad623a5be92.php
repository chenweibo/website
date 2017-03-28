<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"G:\xampp\htdocs\liangxing\public/../application/index\view\pro\pro_show.html";i:1490686510;s:77:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\header.html";i:1490688057;s:75:"G:\xampp\htdocs\liangxing\public/../application/index\view\public\foot.html";i:1490596528;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $data['name']; ?>-<?php echo $system['title']; ?></title>
<meta name="keywords" content="<?php echo $system['keywords']; ?>">
<meta name="description" content="<?php echo $system['description']; ?>">
<link href="__home__/css/reset.css" rel="stylesheet">
<link href="__home__/css/thems.css" rel="stylesheet">
<link href="__home__/css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="__home__/images/favicon.ico">
<link  href="__home__/css/swiper.min.css"/>
<script src="__home__/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="__home__/js/js_z.js"></script>
<script type="text/javascript" src="__home__/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="__home__/js/jqzoom.js"></script>
<script type="text/javascript" src="__home__/js/public.js"></script>
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
    <div class="nav nav-about"><a href="product.html">产品中心</a><a href="projects.html">工程案例</a></div>
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
    <div class="pro_view">
      <div class="pro_show clearfix">
        <div class="pro_show_img">
          <div id="pro_img">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
                <td height="300" align="center" valign="middle" bgcolor="#FFFFFF"><a href="__home__/images/no2.gif" onClick="return false" class="zxx_image_zoom_list" id="proimgA"><img src="" border="0" width="0" height="0" onload="AutoResizeImage(300,300,this);" id="proimg" style="display:none;" class="zxx_zoom_image" /></a></td>
              </tr>
            </table>
            <div style="width:100%; position:relative; margin-top:-16px; text-align:right;" id="zoomer"><img src="__home__/images/arr_zoom.gif" border="0" /></div>
          </div>
          <div id="img_list">
            <div id="img_list_l"></div>
            <div id="img_list_con">
              <table border="0" align="center" cellpadding="0" cellspacing="0" id="img_list_table" >
                <tr class="ccs">
                 <?php if(is_array($str) || $str instanceof \think\Collection || $str instanceof \think\Paginator): $i = 0; $__LIST__ = $str;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                  <td  height="66" align="center" valign="top"><img src="/uploads/<?php echo $v; ?>" border="0" width="600" height="600" onload="AutoResizeImage(60,60,this);" style="margin-top:5px;" /></td>
                
                 <?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </tr>
              </table>
            </div>
            <div id="img_list_r"></div>
          </div>
          <script type="text/javascript">

             $(document).ready(function(){
                $(".ccs td:first img").click();
             });
           
      //左右按钮鼠标状态
      document.getElementById("img_list_l").onmouseover=function(){this.style.background="url(__home__/images/img_list_left.png) no-repeat left -66px";}
      document.getElementById("img_list_l").onmouseout=function(){this.style.background="url(__home__/images/img_list_left.png) no-repeat left -3px";}
      document.getElementById("img_list_r").onmouseover=function(){this.style.background="url(__home__/images/img_list_right.png) no-repeat right -66px";}
      document.getElementById("img_list_r").onmouseout=function(){this.style.background="url(__home__/images/img_list_right.png) no-repeat right -3px";}
      var imgcon=document.getElementById("img_list_con").getElementsByTagName("img");   //缩图图片集合
      var thistab=0;   //自动移动控制
      for(var i=0;i<imgcon.length;i++){
        imgcon[i].setAttribute("tab",i);
        imgcon[i].onclick=function(){
          thistab=this.getAttribute("tab");
          for(var s=0;s<imgcon.length;s++){
            imgcon[s].parentNode.style.background="url(__home__/images/img_border.png) no-repeat 1px top";       
          }
          this.parentNode.style.background="url(__home__/images/img_border.png) no-repeat 1px -66px";
          document.getElementById("proimg").src=this.src;
          document.getElementById("proimgA").href=this.src;
          document.getElementById("proimg").style.display="none";
          $("#proimg").fadeIn(4000/8);
          //自动移动
          if(imgcon.length>4){
          dostat=false;
          if(thistab<=1){$("#img_list_table").animate({marginLeft:"0px"},600,'easeInOutExpo',function(){dostat=true;});}
          else if(thistab>=imgcon.length-2){$("#img_list_table").animate({marginLeft:-((imgcon.length-4)*moveVal)+"px"},600,'easeInOutExpo',function(){dostat=true;});}
          else{$("#img_list_table").animate({marginLeft:-(thistab-1)*moveVal+"px"},600,'easeInOutExpo',function(){dostat=true;});}
          }
        }
      }
      //左右按钮控制
      var moveVal=65;
      var table=document.getElementById("img_list_table");
      var dostat=true;
      document.getElementById("img_list_r").onclick=function(){
        if(dostat==false)return null;
        if(imgcon.length<=4)return null;
        var place=-(imgcon.length-4)*moveVal;
        if(parseInt(table.style.marginLeft)<=place)return null;
        dostat=false;
        $("#img_list_table").animate({marginLeft:(parseInt(table.style.marginLeft)-moveVal)+"px"},600,'easeInOutExpo',function(){dostat=true;});
      }
      document.getElementById("img_list_l").onclick=function(){
        if(dostat==false)return null;
        if(parseInt(table.style.marginLeft)>=0)return null;
        dostat=false;
        $("#img_list_table").animate({marginLeft:(parseInt(table.style.marginLeft)+moveVal)+"px"},600,'easeInOutExpo',function(){dostat=true;});
      }  
      //默认第一个显示
      if(imgcon[0]!=null){  

        $("img.zxx_zoom_image").jqueryzoom();
      }
          </script>

        </div>
        <div class="pro_show_text">
          <div class="title"><span><?php echo $data['name']; ?></span><?php echo $pname; ?><a class="return" href="javascript:history.go(-1);">返回上层</a></div>
          <h1>产品概述 / <span>Product Overview</span></h1>
          <p>
        <?php echo $data['gaishu']; ?>
          </p>
        
        </div>
      </div>
      <div class="pro_canshuo clearfix">
        <ul class="pro_nav">
          <li class="on"><a><span>规格参数</span></a></li>
          <li><a><span>资质文件</span></a></li>
        </ul>
        <div class="pro_det_main">
          <div class="pro_path" style="display:block;">
            <div class="title">规格参数<i></i></div>
            <div class="pro_intro pro_tab">

            <?php echo $data['info']; ?>
            </div>
          </div>
          <div class="pro_path">
            <div class="title">资质文件<i></i></div>
            <div class="pro_intro pro_tab"><a target="_blank" href="/<?php echo $data['down']; ?>"><img src="__home__/images/pdf.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  if($('.pro_nav').length>0){
    var i=window.location.href.split('?attr=')[1];
    $('.pro_nav li').eq(i).addClass('on').siblings().removeClass('on');
    $('.pro_path').eq(i).show().siblings().hide();
    $('.pro_path').eq(i).find('.title').addClass('on').end().siblings().find('.title').removeClass('on');
    $('.pro_path').eq(i).find('.pro_tab').show().end().siblings().find('.pro_tab').hide();
  }
  //产品详情-pc
  $('.pro_nav li').hover(function(){
    $(this).addClass('on').siblings().removeClass('on');
    var i=$(this).index();
    $('.pro_path').eq(i).stop(true,true).fadeIn().siblings().hide();
    $('.pro_path').eq(i).find('.title').addClass('on').end().siblings().find('.title').removeClass('on');
    $('.pro_tab').show();
  });
  //产品详情-手机
  $('.pro_path .title').unbind('click').click(function(){
    $(this).addClass('on').parents('.pro_path').siblings().find('.title').removeClass('on');
    $(this).siblings('.pro_tab').stop().slideDown()
    .parents('.pro_path').siblings().find('.pro_tab').stop().slideUp();
    var i=$(this).parent().index();
    $('.pro_nav li').eq(i).addClass('on').siblings().removeClass('on');
  });
</script> 
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