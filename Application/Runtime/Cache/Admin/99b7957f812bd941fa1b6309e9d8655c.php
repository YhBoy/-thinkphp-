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
  <h2><span class="icon-pencil-square-o"></span>文章管理</h2>
  <ul>
    <li><a href="addCate.html" target="right"><span class="icon-caret-right"></span>添加分类</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>分类管理</a></li>        
  </ul>  
</div>


<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/blog/index.php/Admin/Index/editUp">        
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
		  <input type="hidden" name="id" value="<?php echo ($lis["id"]); ?>">
          <input type="text" id="ov" class="input w50" name="username" value="<?php echo ($lis["username"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>        
      <div class="form-group">
        <div class="label">
          <label>密码：</label>
        </div>
        <div class="field">
			<input type="text" class="input w50" name="password" value="<?php echo ($lis["password"]); ?>"/>         
        </div>
      </div>
     
	   <div class="form-group">
        <div class="label">
          <label>状态：</label>
        </div>
        <div class="field">
			开启：
			<input type="radio" checked="checked" name="status" value="0" />
			<br />
			禁用：
			<input type="radio" name="status" value="1" />     
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


<script>
 //$("#ov").blur(function(){
	// $.ajax({
   //             type:"post",
   //             url:"/blog/index.php/Admin/Index/yz",
     //           data:'pro_id='+$('#ov').val(),
    //            dataType:"json",
    //            success:function(data){
     //               if( data == 1 ){
	//					alert("用户名已经被注册");
	//				}else{
	//					alert("用户名可以");
	//				}
     //           }
  //  });
// })



</script>












</body></html>