<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"G:\xampp\htdocs\liangxing\public/../application/admin\view\productlist\create.html";i:1490685595;s:77:"G:\xampp\htdocs\liangxing\public/../application/admin\view\public\header.html";i:1490583024;s:75:"G:\xampp\htdocs\liangxing\public/../application/admin\view\public\left.html";i:1490251414;s:77:"G:\xampp\htdocs\liangxing\public/../application/admin\view\public\footer.html";i:1488521154;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="chenweibo">
    <meta name="renderer" content="webkit">
    <title>产品添加-企业网站管理后台</title>
    <!-- Bootstrap core CSS -->
    <link href="__static__/bootstrap3.37/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="__static__/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="__static__/css/buttons.css">
    <!-- Custom styles for this template -->
    <link href="__static__/css/dashboard.css" rel="stylesheet">
    <link href="__static__/css/news.css" rel="stylesheet">
     <link href="__static__/datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="__static__/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="__static__/js/ie-emulation-modes-warning.js"></script>
    <script src="__static__/js/jquery.min.js"></script>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="__static__/js/html5shiv.min.js"></script>
      <script src="__static__/js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="__static__/UEditor/ueditor.config.js"></script>
<script type="text/javascript" src="__static__/UEditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="__static__/UEditor/lang/zh-cn/zh-cn.js"></script> 
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/jksm.php">网站后台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a target="_blank" href="/">网站首页</a></li>
            
          
            <li><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    您好，<?php echo $a; ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li  ><a href="javascript:;"  data-toggle="modal" data-target="#myModal">修改密码</a></li>
                    <li><a href="<?php echo url('login/logindelet'); ?>">退出登录</a></li>
                  
                </ul>
            </li></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          修改密码
        </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
      
      <div class="form-group"> 
        <label for="lastname" class="col-sm-2 control-label">旧密码</label> 
        <div class="col-sm-10">
          <input type="text" class="form-control" id="oldname"
              placeholder="请输入旧密码">
         </div>
       </div>

             <div class="form-group"> 
        <label for="lastname" class="col-sm-2 control-label">新密码</label> 
        <div class="col-sm-10">
          <input type="text" class="form-control" id="newsname"
              placeholder="请输入新密码">
         </div>
       </div>
        <label id="targetp"  for="inputPassword" class="sr-only zh">帐号不能为空</label>

     </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pwgb" data-dismiss="modal">关闭
        </button>
        <button type="button" id="updatapw" class="btn btn-primary updatapw">
          提交更改
        </button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>






    <div class="container-fluid">
      <div class="row">


        <div class="col-sm-3 col-md-2 sidebar gaoliang">
          <ul class="nav nav-sidebar">
            <li  ><a href="<?php echo url('admin/system/index'); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 系统设置 <span class="sr-only"></span></a></li>
            
            <li><a href="<?php echo url('/admin/others'); ?>"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> 其他设置</a></li>
            <li><a href="<?php echo url('/admin/slide'); ?>"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> 首页幻灯片</a></li>
            <li><a href="<?php echo url('/admin/page'); ?>"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 单篇文章</a></li>
            <li><a href="<?php echo url('/admin/gbook'); ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 建议反馈</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo url('/admin/productcate'); ?>">  <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 产品分类</a></li>
            <li><a href="<?php echo url('/admin/productlist'); ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> 产品列表</a></li>
            <li><a href="<?php echo url('/admin/articlecate'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 文章分类</a></li>
            <li><a href="<?php echo url('/admin/articlelist'); ?>"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 文章列表</a></li>
            <li><a href="<?php echo url('/admin/imagecate'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 图片分类</a></li>
            <li><a href="<?php echo url('/admin/imagelist'); ?>"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 图片列表</a></li>
            <li><a href="<?php echo url('/admin/downcate'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 下载分类</a></li>
            <li><a href="<?php echo url('/admin/downlist'); ?>"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> 下载列表</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li style="display:none"><a href="<?php echo url('/admin/productlist/recycle'); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 产品回收站</a></li>
            
            <li><a href="<?php echo url('/admin/user'); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 添加管理员</a></li>
            <li ><a href="<?php echo url('/admin/common/file'); ?>"  ><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp;文件管理</a> </li>
          </ul>
        </div>



   <script type="text/javascript">
     
     $(".gaoliang .nav:eq(1) li:eq(1)").addClass('active');
  
   </script>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">产品添加</h1>

<form class="form-horizontal" method="post" action="<?php echo url('save'); ?>" id="cess"  role="form"   style="margin-top:80px">

    
    <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">标题</label>
    <div class="col-sm-10">
      <input class="form-control" name="name"  value="" type="text" id="formGroupInputLarge" placeholder="标题">
    </div>
  </div>

      <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">伪静态名称</label>
    <div class="col-sm-10">
      <input class="form-control" name="p_jintai"  value="" type="text" id="formGroupInputLarge" placeholder="伪静态名称">
    </div>
  </div>

      <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">产品分类</label>
    <div class="col-sm-10">
  <select class="form-control " name="lPath" style="width:120px" >
  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  <option <?php if($vo['id'] == $pid): ?>
selected="select"<?php endif; ?> value="<?php echo $vo['path']; ?>-<?php echo $vo['id']; ?>" ><?php echo $vo['html']; ?><?php echo $vo['name']; ?></option>
  
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </select> 
 
    </div>
  </div>

      <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">点击量</label>
    <div class="col-sm-10">
      <input class="form-control" name="pageview" style="width:100px"  value="" type="text" id="formGroupInputLarge" placeholder="点击量">
    </div>
  </div>

    <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">产品概述</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="5" name="gaishu"></textarea>
    </div>
  </div>
      <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">主要内容</label>
    <div class="col-sm-10">


      <textarea name="info" id="info" ></textarea> 


    </div>
  </div>

    <script type="text/javascript" charset="utf-8">  

    $(document).ready(function () {  
      UE.getEditor('info', {  
      initialFrameHeight: 500,  
      initialFrameWidth: '100%', 
      
    });  
  });  
      
    </script> 


    <div class="form-group form-group-lg" >
    <label class="col-sm-1 control-label" for="formGroupInputLarge">缩略图</label>
    
    <div class="col-sm-10">
                   <div class="col-md-4 input-group">
                <input id="lefile" type="file" name="image" style="display:none">
                <span class="input-group-addon" onclick="$('input[id=lefile]').click();" style="cursor: pointer; background-color: #e7e7e7"><i class="fa fa-folder-open"></i>选择</span>
                <input id="photoCover" name="icon" class="form-control" type="text" value="" name="icon" >
                
                <span class="input-group-addon ut2" style="width:80px;cursor: pointer;pointer-events: auto;" ><i class="fa fa-folder-open"></i>点击上传</span>

              </div> 
              <label id="targetwz" for="inputPassword" style="color:#f00" class="sr-only">*请选择文件</label> 
    </div>

  </div>

 <img src="" alt="">
      <div class="form-group form-group-lg" >
    <label class="col-sm-1 control-label" for="formGroupInputLarge">多图上传</label>
    
    <div class="col-sm-10">
    <input id="lefile2" type="file" name="more" style="display:none">
    <div class="duotu clearfix" style="width:100%">
      

    </div>
   <a onclick="$('input[id=lefile2]').click();"   class="button button-glow button-rounded button-royal">点击选择</a>
    </div>
 <div></div>
  </div>
 
   <script type="text/javascript">
      var i=0;
        $("#lefile2").change(function(){
       var formData = new FormData($( "#cess" )[0]);  
         $.ajax({  
          url: '/admin/common/uploadmore' ,  
          type: 'POST',  
          data: formData,  
          async: false,  
          cache: false,  
          contentType: false,  
          processData: false,  
          success: function (data) {  
          i++;
    $('.duotu').append("<div id='pt"+i+"'  class='pic dingwei'><a   class='button button-circle button-tiny xxt xxt"+i+"' style='font-size:18px;'>×</a><img  src="+'/uploads/'+data+"></div>");
               var bb=$(".imgmore").attr('value');
               if(!bb){
               bb+=data; 
               }
                else{
                  bb+=","+data;
                }
          $(".imgmore").attr('value',bb); 
          $(".xxt"+i).click(function(){
          var e=$('.pic').length;
          var t=$(".imgmore").val();
          var e = $(this).parent().attr("id");

          if($(".pic").length==1)
                {             
          ss = t.split(",");
          z=ss[0];
          c=t.replace( z, "");
          $(".imgmore").attr('value',c); 

          $("#"+e).remove();
               }
             else{             
             if($(".pic:first").attr("id") == e){
          ss = t.split(",");
          z=ss[0];
          c=t.replace( z+",", "");
          $(".imgmore").attr('value',c); 
          $("#"+e).remove();  
             }
              else{
             var d=$("#"+e+"> img").attr('src');
             c=d.replace( '/uploads/', "")
             z=t.replace( ","+c, "");
            $(".imgmore").attr('value',z); 
             $("#"+e).remove();
              }
                }
                  });
               
          },  
          error: function () {  
              alert('发生错误');  
          }  
     });  


               });

   </script>
   
   <input class="imgmore" type="hidden" name="imgmore" value="">
      <div class="form-group form-group-lg" >
    <label class="col-sm-1 control-label" for="formGroupInputLarge">下载</label>
    
    <div class="col-sm-10">
                   <div class="col-md-4 input-group">
                <input id="lefile1" type="file" name="down" style="display:none">
                <span class="input-group-addon" onclick="$('input[id=lefile1]').click();" style="cursor: pointer; background-color: #e7e7e7"><i class="fa fa-folder-open"></i>选择</span>
                <input id="photoCover1" name="down" class="form-control" type="text" value=""  >
                
                <span class="input-group-addon ut3" style="width:80px;cursor: pointer;pointer-events: auto;" ><i class="fa fa-folder-open"></i>点击上传</span>

              </div> 
              <label id="targetwz1" for="inputPassword" style="color:#f00" class="sr-only">*请选择文件</label> 
    </div>

  </div>



    <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">SEO关键词</label>
    <div class="col-sm-10">
      <input class="form-control" name="keywords"  value="" type="text" id="formGroupInputLarge" placeholder="关键词">
    </div>
  </div>
      <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">SEO描述</label>
    <div class="col-sm-10">
      <input class="form-control" name="description"  value="" type="text" id="formGroupInputLarge" placeholder="描述">
    </div>
  </div>


           
    <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">语言选择</label>
    <div class="col-sm-10">
      <div class="checkbox">
     
      <input type="radio" id="checkboxWarning" name="lang" checked="checked" value="cn">
       中文
    
     
      <input type="radio" id="checkboxWarning" name="lang"  value="en">
       英文
    
  </div>
    </div>
  </div>

          <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">显示状态</label>
    <div class="col-sm-10">
      <div class="checkbox">
     
      <input type="radio" id="checkboxWarning" name="show" checked="checked" value="1">
       显示
    
     
      <input type="radio" id="checkboxWarning" name="show"  value="0">
       隐藏
    
  </div>
    </div>
  </div>

    <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">首页推荐</label>
    <div class="col-sm-10">
      <div class="checkbox">
     
      <input type="radio" id="checkboxWarning" name="recommend"  value="1">
       推荐
    
     
      <input type="radio" id="checkboxWarning" checked="checked" name="recommend"  value="0">
       不推荐  (首页没推荐的可以无视)
    
  </div>
    </div>
  </div>



 <div class="form-group form-group-lg">
 <label class="col-sm-1 control-label sr-only" for="formGroupInputLarge">提交修改按钮</label>
   <div class="col-sm-10">
   <button href="#" class="button button-3d button-primary button-rounded">保存</button>
   </div>
     </div>

</form>




        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="__static__/js/ajax.js"></script>
    <script src="__static__/bootstrap3.37/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script type="text/javascript" src="__static__/datetime/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="__static__/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="__static__/datetime/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="__static__/datetime/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>


<script type="text/javascript">
	
		$('.form_date').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
         format: 'yyyy-mm-dd hh:ii',
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>
  </body>
</html>
