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
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改文章信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/blog/index.php/Admin/Article/editUp" enctype="multipart/form-data">      
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
		  <input type="hidden" name="id" value="<?php echo ($model["id"]); ?>">
          <input type="text" class="input" name="name" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
        
          <input type="file" name="img" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*200</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="text"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>