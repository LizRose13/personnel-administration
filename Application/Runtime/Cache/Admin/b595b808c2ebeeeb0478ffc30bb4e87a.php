<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>干部管理系统</title>
<!--CSS-->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--Javascripts-->
<!-- jQuery -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1></h1>

    <p   style="font-size: 45px" >欢迎您！干部管理系统管理员</p>

    </div>
  <!-- End #logn-top -->
  <div id="login-content">

    <form action="/trainee/Admin/Index/login" method="post">
      <div class="notification information png_bg">
      </div>
      <p>
        <label style="font-size: 18px; text-align: right">用户名</label>
        <input style="font-size: 15px" class="text-input" type="text" name="admin_name"/>
      </p>
      <div class="clear"></div>
      <p>
        <label style="font-size: 18px;text-align: right
">密码</label>
        <input style="font-size: 15px" class="text-input" type="password" name="admin_pwd" />
      </p>

      <div class="clear"></div>
<!--       <p id="remember-password">
        <input type="checkbox" />
        Remember me </p>
      <div class="clear"></div>
      <p> -->
        <input class="button" type="submit" value="登陆" />
      </p>
    </ul>
    </form>
  </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
<script>

</script>
</html>