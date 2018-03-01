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

<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/reset.css"
type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/style.css"
type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/invalid.css"
type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.date.js"></script>
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
				<li><a href="/trainee/Admin/Project/addProject" class="nav-top-item  current">
					<!-- Add the class "current" to current menu item -->
					项目
				</a>
					<ul>
						<li><a href="/trainee/Admin/Project/showProject">项目列表</a></li>
						<li><a href="#"  class="current">基本信息</a></li>
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
<p>
<strong>17th May 2009</strong> by Admin<br /> Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi
at felis aliquet congue. <small><a href="#"
							   class="remove-link" title="Remove message">Remove</a></small>
</p>
<p>
<strong>2nd May 2009</strong> by Jane Doe<br /> Ut a est eget
ligula molestie gravida. Curabitur massa. Donec eleifend, libero
at sagittis mollis, tellus est malesuada tellus, at luctus turpis
elit sit amet quam. Vivamus pretium ornare est. <small><a
href="#" class="remove-link" title="Remove message">Remove</a></small>
</p>
<p>
<strong>25th April 2009</strong> by Admin<br /> Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi
at felis aliquet congue. <small><a href="#"
							   class="remove-link" title="Remove message">Remove</a></small>
</p>
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
</select> <input class="button" type="submit" value="Send" />
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
<div>
Javascript is disabled or is not supported by your browser. Please
<a href="http://browsehappy.com/"
title="Upgrade to a better browser">upgrade</a> your browser or <a
href="http://www.google.com/support/bin/answer.py?answer=23852"
title="Enable Javascript in your browser">enable</a> Javascript
to navigate the interface properly. Download From <a
href="http://www.exet.tk">exet.tk</a>
</div>
</div>
</noscript>
<!-- Page Head -->
<!-- Page Head -->
<ul class="shortcut-buttons-set">

</ul>
<!-- End .shortcut-buttons-set -->
<div class="clear"></div>
<!-- End .clear -->

<div class="content-box">
<!-- Start Content Box -->
<div class="content-box-header">

<ul class="content-box-tabs">
<!--<li><a href="#tab2" class="default-tab">报名信息</a></li>-->
<!---->
<li><a href="#tab1" class="default-tab" >基本信息</a></li>
</ul>
<div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
<div class="tab-content  default-tab" id="tab1">

<table width="400" height="160" border="3">
<tr>
	<td width="14"><span class="STYLE2"><div
			align="right">
	<p
			style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">项目名称</p></span></td>

	<td width="172"><label> <input
			name="pro_time_start" type="text" id="type"
			disabled="disabled"  value="<?php echo ($projectinfo['pro_name']); ?>"/>
	</label></td>

</tr>

	<tr>

		<td width="114"><span class="STYLE2">
<div align="right">
<p
		style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">限制人数</p>
</span></td>

		<td width="192"><label> <input name="pro_limit"
									   type="text" id="docu_id" disabled="disabled" value="<?php echo ($projectinfo['pro_limit']); ?>"/>
		</label></td>
	</tr>
<tr>
	<td width="114"><span class="STYLE2"><div
			align="right">
<p
style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">起始时间</p></span></td>
	<td width="172"><label> <input
			name="pro_time_start" type="text" id="type"
			disabled="disabled"  value="<?php echo ($projectinfo['pro_time_start']); ?>"/>
	</label></td>


</tr>

	<tr>
		<td width="114"><span class="STYLE2">
<div align="right">
<p
		style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">结束时间</p>
</span></td>

		<td width="192"><label> <input name="pro_time_end"
									   type="text" id="docu_id" disabled="disabled" value="<?php echo ($projectinfo['pro_time_end']); ?>"/>
		</label></td>
	</tr>
<tr>
	<td width="114"><span class="STYLE2"><div
			align="right">
<p
style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">说明</p></span></td>
	<td width="172"><label> <input name="pro_instruct"
								   type="text" id="type" disabled="disabled" value="<?php echo ($projectinfo['pro_instruct']); ?>"/>
	</label></td>

</tr>

	<tr>

		<td width="114"><span class="STYLE2">
<div align="right">
<p
		style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">是否确认报名单位</p>
</span></td>
		<td width="95"><label> <select name="pro_isFirst"
									   id="pro_isFirst" disabled="disabled">
			<option value="0">否</option>
			<option value="1" id="isConfirm">是</option>

		</select>
		</label></td>

		<Script>
			if ("<?php echo ($projectinfo['pro_isConfirm']); ?>" == 1) {
				document
						.getElementById("isConfirm").selected = "true";
			}
		</Script>
	</tr>
<tr>
	<td width="114"><span class="STYLE2"><div
			align="right">
<p
style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">项目状态</p>
</span></td>
	<td width="172"><label> <input name="pro_isEnd"
								   type="text" id="pro_isEnd" disabled="disabled" />
	</label></td>
	<script>
		if ("<?php echo ($projectinfo['pro_isEnd']); ?>" == 0) {
			document
					.getElementById("pro_isEnd").setAttribute('value','未结束');
		}else{
			document
					.getElementById("pro_isEnd").setAttribute('value','已结束');
		}
	</script>

</tr>

	<tr>
		<td width="114"><span class="STYLE2">
<div align="right">
<p
		style="font-family: 微软雅黑; color: #4bbd00; font-size: 13px;">备注</p>
</span></td>

		<td width="192"><label> <textarea name="pro_remark"
										  cols="" rows="" disabled="disabled"><?php echo ($projectinfo['pro_remark']); ?></textarea>
		</label></td>
	</tr>

</table>

</table>



</div>
<!-- End #tab1 -->
<!--	<div class="tab-content  default-tab" id="tab2">
<a class="button" href="/trainee/Admin/Project/expUser/pro_id/<?php echo ($pro_id); ?>" >导出excel</a>

<table>
<thead>
<tr>
	&lt;!&ndash;<th>序号</th>&ndash;&gt;
	<th>单位名称</th>
	<th>用户名</th>
	<th>密码</th>
	<th>通讯员名称</th>
	<th>通讯员电话</th>
	<th>通讯员email</th>
	<th>邮编</th>
	<th>地址</th>
	<th>已报人数</th>
	<th>限制</th>
	<th>备注</th>
	<th>学员信息</th>

</tr>
</thead>

<tbody>
<?php if(is_array($units)): $i = 0; $__LIST__ = $units;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$unit): $mod = ($i % 2 );++$i;?><tr>
		&lt;!&ndash;<td><?php echo ($unit['id']); ?></td>&ndash;&gt;
		<td><?php echo ($unit['unit_name']); ?></td>
		<td><?php echo ($unit['unit_user']); ?></td>
		<td><?php echo ($unit['unit_pwd']); ?></td>
		<td><?php echo ($unit['repo_name']); ?></td>
		<td><?php echo ($unit['repo_phone']); ?></td>
		<td><?php echo ($unit['repo_email']); ?></td>
		<td><?php echo ($unit['unit_zipcode']); ?></td>
		<td><?php echo ($unit['unit_address']); ?></td>
		<td>0000</td>
		<td><?php echo ($unit['unit_limit']); ?></td>
		<td><?php echo ($unit['unit_remark']); ?></td>


		<td>
			<a href="/trainee/Admin/Trainee/showTrainee/unit_id/<?php echo ($unit['id']); ?>" title="Look"><img src="/trainee/Application/admin/Common/resources/images/icons/glass.png" alt="Look" /></a>

		</td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>

<tfoot>
<tr>
	<td colspan="6">

		<div class="pagination">
			<?php echo ($page); ?>
		</div> &lt;!&ndash; End .pagination &ndash;&gt;
		<div class="clear"></div>
	</td>
</tr>
</tfoot>
</table>
</div>-->
<!-- End #tab2 -->
</div>
<!-- End .content-box-content -->
</div>

<!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>