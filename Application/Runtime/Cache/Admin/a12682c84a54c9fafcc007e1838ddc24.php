<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/blue/skin.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
		<input type="hidden" name='act' value="<?php echo ($act); ?>" >
		<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($info['username']); ?>" placeholder="" name="username">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off"  placeholder="更新密码" id="password" name="password">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">性别：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<label><input name="gender" type="radio" <?php if($info['gender'] == 1): ?>checked<?php endif; ?> value="1">男</label>
			</div>
			<div class="radio-box">
				<label><input type="radio" name="gender" <?php if($info['gender'] == 0): ?>checked<?php endif; ?> value='0'>女</label>
			</div>
		</div>
	</div>
	<!-- <div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">角色：</label>
		<div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:150px;">
				<select class="select" name="roleId" size="1">
					<option <?php if($info["roleId"] == 0): ?>selected<?php endif; ?> value="0">超级管理员</option>
					<option <?php if($info["roleId"] == 1): ?>selected<?php endif; ?> value="1">总编</option>
					<option <?php if($info["roleId"] == 2): ?>selected<?php endif; ?> value="2">栏目主辑</option>
					<option <?php if($info["roleId"] == 3): ?>selected<?php endif; ?> value="3">栏目编辑</option>
				</select>
			</span> 
		</div>
	</div> -->
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">是否启用：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<label><input name="status" type="radio" <?php if($info["status"] == 1): ?>checked<?php endif; ?> value="1">启用</label>
			</div>
			<div class="radio-box">
				<label><input type="radio" name="status" <?php if($info["status"] == 0): ?>checked<?php endif; ?> value='0'>禁用</label>
			</div>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" id="btn_sub">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/Public/Admin/config/config.js"></script> 
<!--/_footer 作为公共模版分离出去-->

<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#btn_sub").click(function(){
		var postData = serializeData("form-admin-add");
		$.ajax({
			url:"<?php echo U('adminHandle');?>",
			data:postData,
			type:"post",
			success:function(result){
				console.log(result);
				var res = JSON.parse(result);
				if(res.status == 1){
					layer.msg(res.msg,{icon:1,time:1000},function(){
						parent.location.href = "/admin.php/admin/index"
					})
				}else if(res.status == 0){
					layer.msg(res.msg,{icon:2,time:1000})
				}
			}
		})
	})
	

});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>