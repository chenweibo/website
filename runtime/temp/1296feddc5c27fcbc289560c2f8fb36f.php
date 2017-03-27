<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"G:\xampp\htdocs\jiepai\public/../application/index\view\down\down.html";i:1488873610;s:74:"G:\xampp\htdocs\jiepai\public/../application/index\view\public\header.html";i:1489022104;s:72:"G:\xampp\htdocs\jiepai\public/../application/index\view\public\news.html";i:1488862658;s:72:"G:\xampp\htdocs\jiepai\public/../application/index\view\public\foot.html";i:1488953097;}*/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>资料下载-<?php echo $system['title']; ?></title>
	<meta name="keywords" content="<?php echo $system['keywords']; ?>">
	<meta name="description" content="<?php echo $system['description']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	
	<!-- include main css -->
	<link rel="stylesheet" type="text/css" href="__home__/css/slick.css"/>	
	<link rel="stylesheet" type="text/css" href="__home__/bootstrap3.37/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="__home__/css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="__home__/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="__home__/css/reset.css"/>
	<link rel="stylesheet" href="__home__/css/animates.css" />
	<!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<script src="__static__/js/jquery.min.js"></script>
</head>
<body>
	
<div>
	<!--header-->
  

	<header class="header">
	  
	    <div class="kuan_heaaer clearfix">
	    	<a href="/" class="logo">
	    		<img src="__home__/images/logo.jpg" alt="" />
	    	</a>
	    	<div class="nav_div">
	    		<ul class="nav_ul">                                                                                                      
	    			<li >
	    				<a href="/"><span>网站首页</span></a>
	    			</li>
	    			<li>
	    				<a href="/about"><span>关于我们</span></a>
	    				<div class="erji">
	    					<a href="/about">公司简介</a>							
							<a href="/wangluo">营销网络</a>
							<a href="/kefu">客服中心</a>
							<a href="/rencai">人才招聘</a>
							<a href="/shebei">设备展示</a>
	    				</div>
	    			</li>
	    			<li>
	    				<a href="/pro/1"><span>产品展示</span></a>
	    				<div class="erji">

	    				   <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
	    					<a href="/pro/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
	    					<?php endforeach; endif; else: echo "" ;endif; ?>
							
							
	    				</div>
	    			</li>
	    			<li>
	    				<a href="/honor"><span>资质荣誉</span></a>
	    				
	    			</li>
	    				<li>
	    				<a href="/news"><span>新闻资讯</span></a>
	    				<div class="erji">
	    					<a href="/news">公司新闻</a>
	    					
	    				</div>
	    			</li>
	    				<li>
	    				<a href="/down"><span>下载中心</span></a>
	    			</li>
	    				<li>
	    				<a href="/contact"><span>联系我们</span></a>
	    				<div class="erji">
	    					<a href="/contact">联系方式</a>
	    					<a href="/map">公司地图</a>    	
	    				</div>
	    			</li>
	    		</ul>
	    	</div>
	    	<div class="ensou">
	    		
	    		<a href="javascript:;" class="sou_img"><img src="__home__/images/fang.jpg" alt="" /></a>
	    		<div class="sou_nei">
	    		
	    			<input name="keys" class="keys" id="" placeholder="输入关键词" type="">
	    			<img class="sousuo" src="__home__/images/fang.jpg" alt="" />

	    			<script type="text/javascript">
	    				$(document).ready(function(){
                       
                            $(".sousuo").click(function(){ 
                                 var key=keys=$('.keys').val();                        
                              window.location.href = "/search?keys="+keys;                                             
                            });

	    				});

                       


	    			</script>
	    		</div>
	    	</div>
	    	<a href="#mmenu" class="iconfont phone-nav">
	    		  <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
	    	</a>
	    </div>
	</header>
	  <script type="text/javascript">
  	

  	 $(".nav_ul li:eq(5)").addClass('active');
  </script>	
			
	<!--banner-->
	<section class="banner">
	    <div><img src="__home__/images/down_banner.jpg" alt=""></div>
	</section>
	<div class="com_zi clearfix">
		<div class="left_zi">
			<div class="top_com">
				<span>下载中心</span>
			</div>
			<ul class="nav_left">
				<li>
					<a href="down">下载中心</a>
				</li>
				
			</ul>
  			<div class="pro_lei">
				<div class="top">新闻资讯  </div>
				<ul class="left_g_new">


 <?php if(is_array($nl) || $nl instanceof \think\Collection || $nl instanceof \think\Paginator): $i = 0; $__LIST__ = $nl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li><a href="/news_show/<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></li>
	<?php endforeach; endif; else: echo "" ;endif; ?>				
				</ul>
			</div> 
		</div>
		<div class="right_zi">
			<div class="bar clearfix">
				<span class="b_tt">下载中心</span>
				<span class="curbar"><i>您当前的位置：</i><a href="index.html">首页</a> > <i>下载中心</i></span>
			</div>
			<ul class="down_ul">
	<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="<?php echo $vo['down']; ?>" target="_blank"><span><?php echo $vo['name']; ?>  </span><time>[<?php echo date("Y-m-d",$vo['createtime']); ?>]</time></a>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
			</ul>
		  <div><?php echo $list->render(); ?></div>
		</div>
	</div>

  	<div class="links clearfix">
		<span>
			友情链接
		</span>
		<div class="link_a">


		 <?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
<a href="<?php echo f3($v); ?>" target="_blank"><?php echo quchu($v); ?></a>| 		 
<?php endforeach; endif; else: echo "" ;endif; ?>		
		</div>				
	</div>
	<div class="footer">
		<div class="footer_com clearfix">
			<ul class="di_nav">
				<li>
					<a href="/about" class="tit">关于我们</a>
					<a href="/about">公司简介</a>							
					<a href="/wangluo">营销网络</a>
					<a href="/kefu">客服中心</a>
					<a href="/rencai">人才招聘</a>
					<a href="/shebei">设备展示</a>
				</li>
				<li>
					<a href="/pro/1/2" class="tit">产品展示</a>
					   <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
	    					<a href="/pro/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
	    					<?php endforeach; endif; else: echo "" ;endif; ?>
				</li>
			
				<li>
					<a href="/honor" class="tit">荣誉资质</a>
				
				</li>
				<li>
					<a href="/contact" class="tit">联系我们</a>
					<a href="/contact">联系方式</a>
	    					<a href="/map">公司地图</a>    	
				</li>
			</ul>
			<div class="er_right">
				<div class="er">
					<div class="pic">
						<img src="__home__/images/erwei.png" alt="" class="vcenter">
						<i></i>
					</div>
					<div class="text">
						<span>微信公众平台</span>
						<span>关注重用</span>
					</div>
				</div>
				<div class="dian">
					<div class="di_bg">
						<a href="tel:021-31265245">021-31265245</a>
						<span>服务咨询热线</span>
					</div>
					<a href="map.html" class="map_a">公司地图</a>
					
				</div>
			</div>
			
		</div>
		<div class="copy clearfix">
			<div class="copy_cc">
				<span> Copyright(c)2015-2024  沪ICP备********号-1   </span> <div class="y_a">
					<a target="_blank" href="http://www.yqrc.com"><img src="__home__/images/yu.png" alt=""></a></div>
			</div>
		</div>
	</div>
<div style="" class="search_mask">
	<div class="s_box">
		<p class="text1">请输入搜索关键字</p>
		<a href="javascript:;" class="sure">确定</a>
	</div>
</div>
<!--移动端底部导航--><div class="phonefooternav">
		<ul class="clearfix">
			<li>
				<a href="tel:111">
					<i class="iconfont"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></i>
					<span>一键电话</span>
				</a>
			</li>
			<li>
				<a href="/about">
					<i class="iconfont"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></i>
					<span>关于我们</span>
				</a>
			</li>
			<li>
				<a href="/contact">
					<i class="iconfont"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></i>
					<span>联系我们</span>
				</a>
			</li>
			<li>
				<a href="/">
					<i class="iconfont"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i>
					<span>返回首页</span>
				</a>
			</li>
		</ul>
	</div><!--移动端  Mmenu-->
	<!--移动端  Mmenu-->
	<nav id="mmenu">
		<ul>
			<li><a href="/">首 页</a></li>
			<li><a href="/about">关于我们</a>
				<ul>
				<li><a href="/about">公司简介</a></li>
				<li><a href="/wangluo">营销网络</a></li>
				<li><a href="/kefu">客服中心</a></li>
				<li><a href="/rencai">人才招聘</a></li>
				<li><a href="/shebei">设备展示</a></li>
				</ul>
			</li>
			<li><a href="/pro/1/2">产品中心</a>
				<ul>
          <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          
		<li><a href="/pro/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
						
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</li>
			<li><a href="/honor">资质荣誉</a>
				
			</li>
			<li><a href="/news">新闻中心</a>
				<ul>
					<li><a href="/news">公司新闻</a></li>
					
				</ul>
			</li>
			<li><a href="/contact">联系我们</a>
				<ul>
					<li><a href="/contact">联系方式</a></li>
					
				</ul>
			</li>
		</ul>
	</nav>	
		
</div>	
    <script src="__static__/bootstrap3.37/js/bootstrap.min.js"></script>


<!--Include Js-->
<script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<!--移动端导航-->
<script src="__home__/js/jquery.mmenu.all.min.js" type="text/javascript" charset="utf-8"></script>

<script src="__home__/js/public.js" type="text/javascript" charset="utf-8"></script>

<!--slick-->
<script src="__home__/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	    $(function(){
		    $('.banner').slick({
		        dots: true,
		        autoplay:true,
		        arrows:false,
		        autoplaySpeed:3000,
		    });
		});
</script>

<!--placeholder-->
<script src="__home__/js/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(function(){ $('input, textarea').placeholder(); });
</script>

<!--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

</body>
</html>
