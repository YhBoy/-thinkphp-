<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="http://127.0.0.1/blog/Application/Admin/Public/css/pintuer.css">
<link rel="stylesheet" href="http://127.0.0.1/blog/Application/Admin/Public/css/admin.css">
<script src="http://127.0.0.1/blog/Application/Admin/Public/js/jquery.js"></script>
<script src="http://127.0.0.1/blog/Application/Admin/Public/js/pintuer.js"></script>
</head>
<body>
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="http://127.0.0.1/blog/Application/Admin/Public/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l">
	<a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
	
	<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;
	<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> 
  </div>
</div>

<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>用户管理</h2>
  <ul style="display:block">
    <li><a href="/blog/index.php/Admin/Index/lis" target="right"><span class="icon-caret-right"></span>用户列表</a></li>
	<li><a href="/blog/index.php/Admin/Index/add" target="right"><span class="icon-caret-right"></span>增加用户</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>分类管理</h2>
  <ul>
    <li><a href="/blog/index.php/Admin/Cate/index" target="right"><span class="icon-caret-right"></span>分类列表</a></li>
    <li><a href="/blog/index.php/Admin/Cate/add" target="right"><span class="icon-caret-right"></span>添加分类</a></li>
      
  </ul>  
  <h2><span class="icon-pencil-square-o"></span>文章管理</h2>
  <ul>
    <li><a href="/blog/index.php/Admin/Article/index" target="right"><span class="icon-caret-right"></span>文章列表</a></li>
    <li><a href="/blog/index.php/Admin/Article/add" target="right"><span class="icon-caret-right"></span>添加文章</a></li> 
  </ul>  
</div>


<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">用户列表列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span>添加用户</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">用户名</th>
      <th width="15%">密码</th>
      <th width="20%">状态</th>
	  <th width="20%">编辑</th>
    </tr>

	   <?php if(is_array($lis)): $i = 0; $__LIST__ = $lis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["username"]); ?></td>
				<td><?php echo ($vo["password"]); ?></td>
				<td><?php echo ($vo["status"]); ?></td>
				<td>
					<div class="button-group">
					  <a class="button border-main" href="/blog/index.php/Admin/Index/edit/id/<?php echo ($vo["id"]); ?>"><span class="icon-edit"></span> 修改</a>
					  <a class="button border-red" href="/blog/index.php/Admin/Index/del/id/<?php echo ($vo["id"]); ?>"><span class="icon-trash-o"></span> 删除</a>
					</div>
				</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
    
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){
	
	}
}
</script>

</body></html>