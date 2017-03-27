<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/productcate/edit.html";i:1488435210;s:75:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/public/header.html";i:1489116328;s:73:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/public/left.html";i:1489041906;s:75:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/public/footer.html";i:1488521156;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="chenweibo">
    <meta name="renderer" content="webkit">
    <title>产品分类设置-企业网站管理后台</title>
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
          <a class="navbar-brand" href="<?php echo url('/admin'); ?>">网站后台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a target="_blank" href="/">网站首页</a></li>
            <li><a href="">清除缓存</a></li>
          
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
            <li  ><a href="<?php echo url('/admin/system'); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 系统设置 <span class="sr-only"></span></a></li>
            
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
            <li><a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 回收站</a></li>
            
            <li><a href="<?php echo url('/admin/user'); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 添加管理员</a></li>
          </ul>
        </div>
   <script type="text/javascript">
     
     $(".gaoliang .nav:eq(1) li:eq(0)").addClass('active');
  
   </script>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">产品分类设置</h1>

<form class="form-horizontal" method="post" action="<?php echo url('update'); ?>" id="cess"  role="form"   style="margin-top:80px">

    
    <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">标题</label>
    <div class="col-sm-10">
      <input class="form-control" name="name"  value="<?php echo $data['name']; ?>" type="text" id="formGroupInputLarge" placeholder="标题">
    </div>
  </div>
      <div class="form-group form-group-lg">
    <label class="col-sm-1 control-label" for="formGroupInputLarge">排序</label>
    <div class="col-sm-10">
      <input class="form-control" name="sort"  value="<?php echo $data['sort']; ?>" type="text" id="formGroupInputLarge" placeholder="排序">
    </div>
  </div>




    <div class="form-group form-group-lg" >
    <label class="col-sm-1 control-label" for="formGroupInputLarge">缩略图</label>
    
    <div class="col-sm-10">
                   <div class="col-md-4 input-group">
                <input id="lefile" type="file" name="image" style="display:none">
                <span class="input-group-addon" onclick="$('input[id=lefile]').click();" style="cursor: pointer; background-color: #e7e7e7"><i class="fa fa-folder-open"></i>选择</span>
                <input id="photoCover" name="icon" value="<?php echo $data['icon']; ?>" class="form-control" type="text" value="" name="icon" >
                
                <span class="input-group-addon ut2" style="width:80px;cursor: pointer;pointer-events: auto;" ><i class="fa fa-folder-open"></i>点击上传</span>

              </div> 
              <label id="targetwz" for="inputPassword" style="color:#f00" class="sr-only">*请选择文件</label> 
    </div>

  </div>


  <input type="hidden"  name="id" value="<?php echo $data['id']; ?>">

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