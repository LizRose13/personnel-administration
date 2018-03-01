<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <script type="text/javascript">
        var unit_count=0;
    </script>


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

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Simpla Admin</title>
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/reset.css"
type="text/css" media="screen"/>
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/style.css"
type="text/css" media="screen"/>
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/invalid.css"
type="text/css" media="screen"/>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/facebox.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.date.js"></script>
<!--<script type="text/javascript"-->
<!--src="/trainee/Application/Common/Common/resources/scripts/myjs_unit.js"></script>-->

<style type="text/css">

    .input_text{
        font-weight: bold;
        color: #0c0c0c;
        margin-bottom: 5px;
    }
</style>


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
<p><strong>17th May 2009</strong> by Admin<br/>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet
congue.
<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
</p>
<p><strong>2nd May 2009</strong> by Jane Doe<br/>
Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis,
tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
</p>
<p><strong>25th April 2009</strong> by Admin<br/>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet
congue.
<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
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
</select>
<input class="button" type="submit" value="Send"/>
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
<div> Javascript is disabled or is not supported by your browser. Please <a
href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or
<a href="http://www.google.com/support/bin/answer.py?answer=23852"
title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface
properly.
Download From <a href="http://www.exet.tk">exet.tk</a></div>
</div>
</noscript>
<!-- Page Head -->

<ul class="shortcut-buttons-set">


</ul>
<!-- End .shortcut-buttons-set -->
<div class="clear">


        <div  align="left">
            <div class="input_text">
                批量导入单位信息
            </div>
            <form action="/trainee/Admin/Unit/impUnit/pro_id/<?php echo ($pro_id); ?>" method="post"
                  enctype="multipart/form-data"
            >
                <input  type="file" name="import"/>
                <input  type="hidden" name="table" value="tablename"/>
                <input type="submit" value="导入"/>
            </form>


        </div>

<div align="right"  style="margin-bottom: 3px">

    <a class="button" href="/trainee/Admin/Unit/addUnit/pro_id/<?php echo ($pro_id); ?>">新增</a>
    <a class="button" href="/trainee/Admin/Project/expUser/pro_id/<?php echo ($pro_id); ?>">导出单位信息</a>
    <a class="button" href="/trainee/Admin/Project/expTrainee/pro_id/<?php echo ($pro_id); ?>">导出学员信息</a>


</div>

</div>
<!-- End .clear -->

<div class="content-box">
<!-- Start Content Box -->
<div class="content-box-header">

<div align="left"><h3 style="color: #0c0c0c">报名单位</h3></div>


</ul>
<div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
<div class="tab-content default-tab" id="tab1">
<!-- This is the target div. id must match the href of this div's tab -->

<table>

<thead>
<tr>
<th>
<input class="check-all" type="checkbox"/>
</th>
<th>单位名称</th>
<th>已报人数</th>
<th>人数限制</th>
<th>通讯员名称</th>
<th>通讯员电话</th>
<th>通讯员email</th>
<th>邮编</th>
<th>地址</th>
<th>操作</th>
<th>查看学员</th>

</tr>
</thead>

<tbody>

<?php if(is_array($units)): $i = 0; $__LIST__ = $units;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$unit): $mod = ($i % 2 );++$i;?><tr>

<td><input type="checkbox" name="check" value="<?php echo ($unit['id']); ?>"/></td>

<td><?php echo ($unit['unit_name']); ?></td>
<td><?php echo ($unit['unit_count']); ?></td>
<td><?php echo ($unit['unit_limit']); ?></td>
<td><?php echo ($unit['repo_name']); ?></td>
<td><?php echo ($unit['repo_phone']); ?></td>
<td><?php echo ($unit['repo_email']); ?></td>
<td><?php echo ($unit['unit_zipcode']); ?></td>
<td><?php echo ($unit['unit_address']); ?></td>

<td>
<a
        href="/trainee/Admin/Unit/showDetailUnit/unit_id/<?php echo ($unit['id']); ?>"
        title="Look"><img
        src="/trainee/Application/admin/Common/resources/images/icons/glass.png"
        alt="Look" height="18"></a>

<a href="/trainee/Admin/Unit/updateUnit/unit_id/<?php echo ($unit['id']); ?>/pro_id/<?php echo ($pro_id); ?>" title="Edit"><img
        src="/trainee/Application/admin/Common/resources/images/icons/pencil.png"
        alt="Edit"/></a>
<a href="/trainee/Admin/Unit/delete/unit_id/<?php echo ($unit['id']); ?>" title="Delete"><img
        src="/trainee/Application/admin/Common/resources/images/icons/cross.png"
        alt="Delete"/></a>
</td>

<td>
    <a id="notconfirm/<?php echo ($project['id']); ?>" class="button"
       href="/trainee/Admin/Trainee/showTrainee/unit_id/<?php echo ($unit['id']); ?>">报名情况</a>
</td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>

<tfoot>

<tr>
<td colspan="6">
<!--<div class="bulk-actions align-left">
<select name="batch_op" id="sel">
    <option value="option1" name="op">批量操作</option>
    <option value="delete" name="delete">删除</option>

</select> <a class="button" href="#" onclick="batchDelete('batchDelete')">确定</a>
</div>-->
<div class="pagination  align-right">
<?php echo ($page); ?>
</div> <!-- End .pagination -->
<div class="clear"></div>
</td>
</tr>
</tfoot>
</table>


</div>
<!-- End .content-box-content -->
</div>
<!-- End .content-box -->
</div>
<!-- End .content-box-content -->
</div>
<!-- End .content-box -->


<!-- End #main-content -->
</div>

<script type="text/javascript">

    //删除path路径下数据
    function batchDelete(path) {
        if (select() == "delete") {
            obj = document.getElementsByName("check");
            var check_val ="";
            for (k in obj) {
                if (obj[k].checked)
                    check_val += obj[k].value+" " ;

            }

//无法传递数组类型，所以拆违string 传递
            $.post(path,
                    {data: check_val},
                    function (data) {
                        if(data==1){
                            alert('删除成功');
                            //刷新
                            location.reload();
                        }else{
                            alert('删除失败，请先清空学员！');
                            location.reload();
                        }

                    }
            );

            // alert(check_val);
        }
    }

    //判断批处理选中情况
    function select() {
        var result = $("#sel").val();
        return result;
    }


</script>
</body>
<!-- Download From www.exet.tk-->
</html>