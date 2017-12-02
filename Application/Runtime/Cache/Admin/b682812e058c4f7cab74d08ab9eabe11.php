<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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

<title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form id="searchData" action="<?php echo U('index');?>" method="get">
		<div class="text-c"> 日期范围：
			<input type="text" name="startTime" id="countTimestart" onfocus="selecttime(1)" value="<?php echo ($startTime); ?>" size="17" class="input-text Wdate" readonly style="width:180px"> 
			- 
			<input type="text" name="endTime" id="countTimeend" onfocus="selecttime(2)" value="<?php echo ($endTime); ?>" size="17"  class="input-text Wdate" readonly style="width:180px">

			<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" name="username" value="<?php echo ($username); ?>">
			<button class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
			<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</a> 
			<a href="javascript:;" onclick="admin_add('添加管理员','/admin/admin/admin_add')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 添加管理员
			</a>
		</span> 
		<span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">登录名</th>
				<!-- <th width="90">角色</th> -->
				<th width="130">加入时间</th>
				<th width="100">是否已启用</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="text-c">
					<td><input type="checkbox" value="<?php echo ($v["id"]); ?>" name=""></td>
					<td><?php echo ($v['id']); ?></td>
					<td><?php echo ($v['username']); ?></td>
					<!-- <td><?php echo ($v['roleid']); ?></td> -->
					<td><?php echo (date("Y-m-s H:i:s",$v['regtime'] )); ?></td>
					<td class="td-status">
						<?php if($v["status"] == 1): ?><span class="label label-success radius">已启用</span>
						<?php else: ?>
							<span class="label label-default radius">已禁用</span><?php endif; ?>
					</td>
					<td class="td-manage">
						<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo U(admin_add);?>','<?php echo ($v["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
						<a title="删除" href="javascript:;" onclick="admin_del('<?php echo ($v["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>
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
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

/*管理员-增加*/
function admin_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*管理员-删除*/
function admin_del(id){
	console.log(id);
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			url: "/admin.php/admin/delData",
			data:{
				id:id
			},
			success: function(data){
				var res = JSON.parse(data);
				if(res.status == 1){
					layer.msg(res.msg,{icon:1,time:100},function(){
						parent.location.href = "/admin.php/admin/index"
					});	
				}else{
					layer.msg(res.msg,{icon:1,time:1000});	
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*管理员-编辑*/
function admin_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url+"?id="+id
	});
	layer.full(index);
}


function selecttime(flag){
  if(flag==1){
    var endTime = $("#countTimeend").val();
    if(endTime != ""){
      WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime});
    }else{
      WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'});
    }
  }else{
    var startTime = $("#countTimestart").val();
    if(startTime != ""){
      WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime});
    }else{
      WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'});
    }    
  }
 }

</script>
</body>
</html>