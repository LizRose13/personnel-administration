<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->


	<script src="/trainee/Application/admin/Common/resources//vendor/jquery/jquery.min.js"></script>
	<script src="/trainee/Application/admin/Common/resources//vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/trainee/Application/admin/Common/resources//vendor/metisMenu/metisMenu.min.js"></script>
	<script src="/trainee/Application/admin/Common/resources//vendor/raphael/raphael.min.js"></script>
	<script src="/trainee/Application/admin/Common/resources//vendor/morrisjs/morris.min.js"></script>
	<script src="/trainee/Application/admin/Common/resources//data/morris-data.js"></script>
	<script src="/trainee/Application/admin/Common/resources//dist/js/sb-admin-2.js"></script>

	<link href="/trainee/Application/admin/Common/resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/trainee/Application/admin/Common/resources/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<link href="/trainee/Application/admin/Common/resources/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="/trainee/Application/admin/Common/resources/vendor/morrisjs/morris.css" rel="stylesheet">
	<link href="/trainee/Application/admin/Common/resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.date.js"></script>
<script language="JavaScript" src="/trainee/Application/admin/Common/resources/scripts/mydate.js"></script>

<?php
date_default_timezone_set("PRC"); $nowtime = time(); $rq = date("Y-m-d ",$nowtime); ?>



</head>
<body>


<ul class="nav navbar-top-links navbar-right">
</ul>
<div id="body-wrapper">
	<!-- Wrapper for the radial gradient background -->

	<div id="sidebar">
		<div id="sidebar-wrapper">
			<!-- Sidebar with logo and menu -->
			<h1 id="sidebar-title">
				<a href="#">Simpla Admin</a>
			</h1>
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo"
			/></a>
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<a href="#" title="Edit your profile"></a><a href="#messages"
															 rel="modal" title="3 Messages"></a><br/> <br/> <a href="#"
																											   title="View the Site"></a>
				<a href="#" title="Sign Out"></a>
			</div>

			<ul id="main-nav">
				<!-- Accordion Menu -->
				<li><a href="/trainee/Admin/Project/addProject" class="nav-top-item ">
					<!-- Add the class "current" to current menu item -->
					项目
				</a>
					<ul>
						<li><a href="/trainee/Admin/Project/showProject" >项目列表</a></li>
						<li><a href="#" >基本信息</a></li>
					</ul>

				</li>





				<li><a href="/trainee/Admin/Project/addProject" class="nav-top-item">设置 </a>
					<ul>
						<li><a href="/trainee/Admin/Admin/showAdmin">个人信息</a></li>
						<li><a href="/trainee/Admin/Admin/updatePwd">修改密码</a></li>

						</li>

					</ul>
				</li>

				<ul>
					<li><a href="/trainee/Admin/Index/loginout">退出</a>

				</ul>


			</ul>

<!-- End #main-nav -->
<div id="messages" style="display: none">
<!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
<h3>3 Messages</h3>
<p> <strong>17th May 2009</strong> by Admin<br />
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
<p> <strong>2nd May 2009</strong> by Jane Doe<br />
Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
<p> <strong>25th April 2009</strong> by Admin<br />
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
<form action="#" method="post">
<h4>New Message</h4>
<fieldset>
<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
</fieldset>
<fieldset>
<select name="dropdown" class="small-input">
<option value="option1">Send to...</option>
<option value="option2">Everyone</option>
<option value="option3">Admin</option>
<option value="option4">Jane Doe</option>
</select>
<input class="button" type="submit" value="Send" />
</fieldset>
</form>
</div>
<!-- End #messages -->
</div>
</div>
<!-- End #sidebar -->
<div id="main-content">
<!-- Main Content Section with everything -->
<noscript>
<!-- Show a notification if the user has disabled javascript -->
<div class="notification error png_bg">
<div> Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
Download From <a href="http://www.exet.tk">exet.tk</a></div>
</div>
</noscript>
<!-- Page Head -->

<ul class="shortcut-buttons-set">


</ul>
<!-- End .shortcut-buttons-set -->
<div class="clear"></div>
<!-- End .clear -->
<div class="content-box">
<!-- Start Content Box -->
<div class="content-box-header">
<h3 style="color: #0c0c0c">学员详情</h3>
<ul class="content-box-tabs">

</ul>
<div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
<div class="tab-content default-tab" id="tab1">
<!-- This is the target div. id must match the href of this div's tab -->

<form action="/trainee/Admin/Project/add" method="post" name="form1" id="form1" onsubmit="MM_validateForm('id','','R','area','','R','cost','','R');return document.MM_returnValue">
<table width="400" height="160" border="3">
<tr>
	<td width="14" ><span class="STYLE2"><div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">学员名称</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_name']); ?>"
		/>

	</label></td>

	<td width="114"><span class="STYLE2"> <div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">学员性别</p></span></td>


	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_sex']); ?>"
		/>

	</label></td>

</tr>
<tr>
	<td width="114"><span class="STYLE2"><div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">院系</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_depart']); ?>"
		/>

	</label></td>

	<td width="114"><span class="STYLE2"> <div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">职务</p></span></td>

	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_job']); ?>"
		/>

	</label></td>
</tr>
<tr>
	<td width="114"><span class="STYLE2"><div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">	移动电话</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_telephone']); ?>"
		/>

	</label></td>

	<td width="114"><span class="STYLE2"> <div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">固定电话</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_fixphone']); ?>"
		/>

	</label></td>
</tr>
<tr>
	<td width="114"><span class="STYLE2"><div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">	邮编</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_zidcode']); ?>"
		/>

	</label></td>

	<td width="114"><span class="STYLE2"> <div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">电子邮箱</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_email']); ?>"
		/>

	</label></td>
</tr>
<tr>
	<td width="114"><span class="STYLE2"><div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">地址</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_address']); ?>"
		/>

	</label></td>

	<td width="114"><span class="STYLE2"> <div align="right">
<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">备注</p></span></td>
	<td width="272"><label>
		<input name="pro_name" type="text" id="type"
			   disabled="disabled"  value="<?php echo ($traineeinfo['tra_remark']); ?>"
		/>

	</label></td>
</tr>


</table>
<table width="500" height="30">

</table>
</form>

</div>
<!-- End .content-box-content -->
</div>
<!-- End .content-box -->
</div>
<!-- End .content-box-content -->
</div>
<!-- End .content-box -->


<!-- End #main-content -->
<!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>