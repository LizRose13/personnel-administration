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
            <li><a href="/trainee/Admin/Project/showProject">项目列表</a></li>
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
    <div class="clear"></div>

    <!--<div class="content-box">-->
      <!--<div class="content-box-header">-->
        <!--<h3>单位详情</h3>-->
        <!--<ul class="content-box-tabs">-->

        <!--</ul>-->
        <!--<div class="clear"></div>-->
      <!--</div>-->
      <!--&lt;!&ndash; End .content-box-header &ndash;&gt;-->
      <!--<div class="content-box-content">-->
        <!--<div class="tab-content default-tab" id="tab1">-->
          <!--&lt;!&ndash; This is the target div. id must match the href of this div's tab &ndash;&gt;-->

          <!--<form action="/trainee/Admin/Project/add" method="post" name="form1" id="form1" onsubmit="MM_validateForm('id','','R','area','','R','cost','','R');return document.MM_returnValue">-->
            <!--<table width="400" height="160" border="3">-->
              <!--<tr>-->
                <!--<td width="14" ><span class="STYLE2"><div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">单位名</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['unit_name']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->

                <!--<td width="114"><span class="STYLE2"> <div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">账户</p></span></td>-->


                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['unit_user']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->

              <!--</tr>-->
              <!--<tr>-->
                <!--<td width="114"><span class="STYLE2"><div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">密码</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['unit_pwd']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->

                <!--<td width="114"><span class="STYLE2"> <div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">通讯员名称</p></span></td>-->

                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['repo_name']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->
              <!--</tr>-->
              <!--<tr>-->
                <!--<td width="114"><span class="STYLE2"><div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">	通讯员电话</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['repo_phone']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->

                <!--<td width="114"><span class="STYLE2"> <div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">通讯员email</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['repo_email']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->
              <!--</tr>-->
              <!--<tr>-->
                <!--<td width="114"><span class="STYLE2"><div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">	邮编</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['unit_zipcode']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->

                <!--<td width="114"><span class="STYLE2"> <div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">地址</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['unit_address']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->
              <!--</tr>-->
              <!--<tr>-->
                <!--<td width="114"><span class="STYLE2"><div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">	已报人数</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="0000"-->
                  <!--/>-->

                <!--</label></td>-->

                <!--<td width="114"><span class="STYLE2"> <div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">人数限制</p></span></td>-->
                <!--<td width="272"><label>-->
                  <!--<input name="pro_name" type="text" id="type"-->
                         <!--disabled="disabled"  value="<?php echo ($unitinfo['unit_limit']); ?>"-->
                  <!--/>-->

                <!--</label></td>-->
              <!--</tr>-->

              <!--<tr>-->
                <!--<td width="114"><span class="STYLE2"><div align="right">-->
<!--<p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">	备注</p></span></td>-->
                <!--<td width="272"><label>-->
			<!--<textarea name="unit_remark" cols="" rows="" disabled="true"-->
            <!--&gt;<?php echo ($unitinfo['unit_name']); ?></textarea>-->

                <!--</label></td>-->


              <!--</tr>-->

            <!--</table>-->
            <!--<table width="500" height="30">-->

            <!--</table>-->
          <!--</form>-->

        <!--</div>-->
        <!--&lt;!&ndash; End .content-box-content &ndash;&gt;-->
      <!--</div>-->
      <!--&lt;!&ndash; End .content-box &ndash;&gt;-->
    <!--</div>-->


    <div class="content-box">

      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3 style="color: #0c0c0c">新增单位</h3>
        <ul class="content-box-tabs">

        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->

          <form action="/trainee/Admin/Unit/add/pro_id/<?php echo ($pro_id); ?>" method="post" name="form1" id="form1" onsubmit="MM_validateForm('id','','R','area','','R','cost','','R');return document.MM_returnValue">
            <table width="400" height="160" border="3">
              <tr>
                <td width="14" ><span class="STYLE2"><div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">单位名称</p></span></td>
                <td width="272"><label>
                  <input name="unit_name" type="text" id="type"
                         placeholder=" * 为必填项"
                         required
                  />
                  *
                </label></td>

                <td width="114"><span class="STYLE2"> <div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">限制人数</p></span></td>

                <td width="192"><label>
                  <input name="unit_limit" type="text" id="docu_id"
                         placeholder="请输入数字"
                         onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"
                         required
                  />
                  *
                </label></td>
              </tr>
              <tr>
                <td width="114"><span class="STYLE2"><div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
      分配账户</p></span></td>
                <td width="172"><label>
                  <input name="unit_user" type="text" id="type"
                         placeholder=" * 为必填项"
                         required

                  />
                  *
                </label></td>

                <td width="114"><span class="STYLE2"> <div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
      分配密码</p></span></td>

                <td width="192"><label>
                  <input name="unit_pwd" type="text" id="docu_id"
                         placeholder=" * 为必填项"
                         required
                  />
                  *
                </label></td>
              </tr>
              <tr>
                <td width="114"><span class="STYLE2"><div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
      通讯员名称</p></span></td>
                <td width="172"><label>
                  <input name="repo_name" type="text" id="type"
                         placeholder=" * 为必填项"
                         required/>
                  *
                </label></td>

                <td width="114"><span class="STYLE2"> <div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
      通讯员电话</p></span></td>

                <td width="192"><label>
                  <input name="repo_phone" type="text" id="repo_phone"
                         pattern="(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$"
                         placeholder=" * 为必填项"
                         required
                  />
                  *
                </label></td>
              </tr>

              <tr>
                <td width="114"><span class="STYLE2"><div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
        通讯员email</p></span></td>
                <td width="172"><label>
                  <input name="repo_email" type="input" id="type"
                         pattern="^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$"
                         placeholder=" * 为必填项"
                         required/>
                  *
                </label></td>

                <td width="114"><span class="STYLE2"> <div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
        邮编</p></span></td>

                <td width="192"><label>
                  <input name="unit_zipcode" type="text" id="docu_id"
                         placeholder=" * 为必填项"
                         pattern = "[1-9][0-9]{5}";
                         required
                  />
                  *
                </label></td>
              </tr>

              <tr>
                <td width="114"><span class="STYLE2"><div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
      地址</p></span></td>
                <td width="172"><label>
                  <input name="unit_address" type="text" id="type"
                         placeholder=" * 为必填项"
                         required/>
                  *
                </label></td>

                <td width="114"><span class="STYLE2"> <div align="right">
      <p style="font-family:微软雅黑;color:#4bbd00;font-size:13px;">
      备注</p></span></td>

                <td width="192"><label>
                  <textarea name="unit_remark" cols="" rows=""></textarea>

                </label></td>
              </tr>

            </table>
            <table width="500" height="30">
              <tr>
                <td width="110">&nbsp;</td>
                <td width="300"><label>
                  <input type="submit" name="add" value="提交"
                         style="color:#FFF;background:linear-gradient(to right,#4bbd00,#093);font-family:微软雅黑;font-size:12px;height:30px;width:60px;"/>
                  <input type="reset" name="Submit2" value="重置"
                         style="color:#FFF;background:linear-gradient(to right,#69DA69,#4bbd00);font-family:微软雅黑;font-size:12px;height:30px;width:60px;margin-left:150px;"/>
                </label></td>
              </tr>
            </table>
          </form>

        </div>
        <!-- End .content-box-content -->
      </div>
      <!-- End .content-box -->
    </div>

  </div>

</div>
</body>
<!-- Download From www.exet.tk-->
</html>