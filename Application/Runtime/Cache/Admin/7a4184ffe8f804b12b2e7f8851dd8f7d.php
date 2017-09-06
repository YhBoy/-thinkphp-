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
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
 
	<table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">名称</th>
      <th width="15%">内容</th>
      <th width="20%">图片</th>
      
      <th width="15%">操作</th>
    </tr>
   
   <?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			  <td><?php echo ($vo["id"]); ?></td>     
			  <td><?php echo ($vo["name"]); ?></td>     
			  <td><?php echo ($vo["text"]); ?></td>
			  <td>
					<?php if( $vo['img'] != '' ): ?><img src="/blog<?php echo ($vo["img"]); ?>" width="50" height="50">
					<?php else: ?>
						暂无缩略图<?php endif; ?>
			  </td>
			  <td><div class="button-group">
				  <a class="button border-main" href="/blog/index.php/Admin/Article/edit/id/<?php echo ($vo["id"]); ?>"><span class="icon-edit"></span> 修改</a>
				  <a class="button border-red" href="/blog/index.php/Admin/Article/del/id/<?php echo ($vo["id"]); ?>" ><span class="icon-trash-o"></span> 删除</a>
			  </div></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>

  
    
  </table>
</div>

</body></html>