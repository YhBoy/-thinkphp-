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
  <div class="panel-head"><strong><span class="icon-key"></span> 修改会员密码</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/blog/index.php/Admin/Index/addUp">
      <div class="form-group">
        <div class="label">
          <label for="sitename">添加管理员：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
          
          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="mpass" name="username" size="50"  />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="password" size="50"   />         
        </div>
      </div>
	  
	  <div class="form-group">
        <div class="label">
          <label for="sitename">状态：</label>
        </div>
        <div class="field">
			开启:
             <input type="radio" checked="checked" name="status" id="radio" value="0"  /></br>
          禁用:
			 <input type="radio" name="status" id="radio1" value="1"  />
              
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