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

<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">用户列表列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span>添加用户</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">名称</th>
      <th width="15%">介绍</th>
      <th width="20%">添加时间</th>
	  <th width="20%">操作</th>
    </tr>

	   <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["info"]); ?></td>
				<td><?php echo ($vo["time"]); ?></td>
			
				<td>
					<div class="button-group">
					  <a class="button border-main" href="/blog/index.php/Admin/Cate/edit/id/<?php echo ($vo["id"]); ?>"><span class="icon-edit"></span> 修改</a>
					  <a class="button border-red" href="/blog/index.php/Admin/Cate/del/id/<?php echo ($vo["id"]); ?>"><span class="icon-trash-o"></span> 删除</a>
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