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
  <div class="panel-head"><strong><span class="icon-key"></span> 添加分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/blog/index.php/Admin/Cate/addUp">
      <div class="form-group">
        <div class="label">
          <label for="sitename">添加分类：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
          
          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="mpass" name="name" size="50"  />       
        </div>
      </div> 
      
	   <div class="form-group">
        <div class="label">
          <label for="sitename">分类描述：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="mpass" name="info" size="50"  />       
        </div>
      </div> 
	 
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o sub" type="submit"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>







</body></html>