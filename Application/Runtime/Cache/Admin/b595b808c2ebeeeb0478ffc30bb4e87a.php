<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>简单实用网站后台管理系统网站模板下载_在线演示_电脑网站模板_前端模板_js代码</title>
    <meta name="keywords" content="简单,实用,网站后台,后台管理,管理系统,网站模板" />
    <meta name="description" content="简单实用网站后台管理系统网站模板下载。" /> 
    <link rel="stylesheet" href="http://127.0.0.1/blog/Application/Admin/Public/css/pintuer.css">
	<link rel="stylesheet" href="http://127.0.0.1/blog/Application/Admin/Public/css/admin.css">
	<script src="http://127.0.0.1/blog/Application/Admin/Public/js/jquery.js"></script>
	<script src="http://127.0.0.1/blog/Application/Admin/Public/js/pintuer.js"></script>
</head>
<body style="background-color:#f2f9fd;">
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



<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="welcome.html" name="right" width="100%" height="100%"></iframe>
</div>