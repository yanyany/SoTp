<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/HOME/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/HOME/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/HOME/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/HOME/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/HOME/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/HOME/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/HOME/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/HOME/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="">
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加公司','/Home/Company/addCompany','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加公司</a></span> <span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">公司名称</th>
				<th width="40">法人姓名</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th width="">地址</th>
				<th width="130">加入时间</th>
				<th width="70">审核状态</th>
				<th width="70">部门</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class="text-c">
				<td><input type="checkbox" value="{$vo.id}" name=""></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><u><?php echo ($vo["name"]); ?></u></td>
				<td><?php echo ($vo["corporation"]); ?></td>
				<td><?php echo ($vo["phone"]); ?></td>
				<td><?php echo ($vo["email"]); ?></td>
				<td class="text-l"><?php echo ($vo["address"]); ?></td>
				<td><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></td>
				<td class="td-status"><span class="label label-success radius">
					<?php if($vo["status"] == 1): ?>待审核<?php endif; ?>
					<?php if($vo["status"] == 2): ?>已通过<?php endif; ?>
					<?php if($vo["status"] == 3): ?>拒绝<?php endif; ?>
					<?php if($vo["status"] == 4): ?>已停用<?php endif; ?>
				</span></td>
				<td onclick="member_show('<?php echo ($vo["name"]); ?>','/Home/company/department','<?php echo ($vo["id"]); ?>','<?php echo ($vo["name"]); ?>')" style="cursor:pointer">查看</td>
				<td class="td-manage">
					<?php if($vo["status"] == 2): ?><a style="text-decoration:none" onClick="member_stop('确认停用?','<?php echo ($vo["id"]); ?>',4)" href="javascript:;" title="停用"> <i class="Hui-iconfont">&#xe63f;</i></a><?php endif; ?>
					<?php if($vo["status"] == 1): ?><a style="text-decoration:none" onClick="member_verify('<?php echo ($vo["id"]); ?>')" href="javascript:;" title="审核"><i class="Hui-iconfont">&#xe60e;</i></a><?php endif; ?>
					<?php if($vo["status"] == 4): ?><a style="text-decoration:none" onClick="member_stop('确认启用?','<?php echo ($vo["id"]); ?>',2)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe60e;</i></a><?php endif; ?>
					<a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo ($vo["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr><?php endforeach; endif; ?>
		</tbody>
		<tr class="content">
			<!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;{$page}</td>-->
			<td colspan="11" bgcolor="#FFFFFF"><div class="pages" style="text-align: center">
				<?php echo ($page); ?>
			</div></td>
		</tr>
	</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/HOME/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/HOME/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/HOME/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/HOME/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/HOME/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/HOME/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<!--<script type="text/javascript" src="/Public/HOME/lib/laypage/1.2/laypage.js"></script>-->
<script type="text/javascript">
/*$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});

});*/
/*用户-添加*/
function member_add(title,url,id,w,h){
	layer_show(title,url,id,w,h);
}
/*用户-查看*/
function member_show(title,url,id,name,w,h){
	layer_shows(title,url,id,name,w,h);
}

/*用户-停用*/
function member_stop(obj,id,status){
	layer.confirm(obj,function(){
		$.ajax({
			type: 'POST',
			url: '/Home/Company/stopCompany',
			dataType: 'json',
			data:{
			    "id":id,
				"status":status
			},
			success: function(json){
				layer.msg(json.msg);
				setTimeout("window.location.reload()",3000);
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);	
}
/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/Home/Company/delCompany',
			dataType: 'json',
			data:{
			   'id':id
			},
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
/*用户审核**/
function member_verify(id){
    layer.confirm('请选择公司最终审核状态？', {
        btn: ['通过','拒绝'] //按钮
    }, function(){
       $.ajax({
		   type:"post",
		   url:"/Home/Company/companyVerfiy",
		   dataType:"json",
		   data:{
		       'id':id,
			   'status':2
		   },
		   success:function(json){
		       if(json.code == 1){
                   layer.msg(json.msg);
                  setTimeout("window.location.reload()",3000);
			   }else{
		           layer.msg(json.msg);
		           return false;
			   }
		   }
	   })
    }, function(){
        $.ajax({
            type:"post",
            url:"/Home/Company/companyVerfiy",
            dataType:"json",
            data:{
                'id':id,
                'status':3
            },
            success:function(json){
                if(json.code == 1){
                    layer.msg(json.msg);
                    setTimeout("window.location.reload()",3000);
                }else{
                    layer.msg(json.msg);
                    return false;
                }
            }
        })
    });
}
</script> 
</body>
</html>