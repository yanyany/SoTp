<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
<title>用户查看</title>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
	<img class="avatar size-XL l" src="/Public/HOME/static/h-ui/images/ucnter/avatar-default.jpg">
	<dl style="margin-left:80px; color:#fff">
		<dt>
			<span class="f-18"><?php echo ($name); ?></span>
			<!--<span class="pl-10 f-12">余额：40</span>-->
		</dt>
		<dd class="pt-10 f-12" style="margin-left:0">这家伙很懒，什么也没有留下</dd>
	</dl>
</div>
<div class="pd-20">
	<table class="table">
		<thead>
		<tr class="text-c">
			<th width="20"><input type="checkbox" name="" value=""></th>
			<th width="50">ID</th>
			<th width="50">部门名称</th>
			<th width="80">创建时间</th>
		</tr>
		</thead>
		<tbody>
		<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class="text-c">
				<td><input type="checkbox" value="{$vo.id}" name=""></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><u><?php echo ($vo["name"]); ?></u></td>
				<td><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></td><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/HOME/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/HOME/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/HOME/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/HOME/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
</body>
</html>