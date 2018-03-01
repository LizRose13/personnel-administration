<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" xmlns:width="http://www.w3.org/1999/xhtml">

<script>
//$(document).ready(function () {
//$('#dataTables-example').DataTable({
//responsive: true
//});
//});

function ItemOnClick(id) {
window.open("/trainee/Home/Project/showDetailProjectSmall/pro_id/" + id, "newwindow", "height=400, width=400, top=100,left=300,toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no,status=no")
}

window.count=0;
window.bt_count=0;

</script>


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>干部报名系统</title>

<!-- css -->
<link rel="stylesheet" href="/trainee/Application/home/Common/resource/css/bootstrap.min.css">
<link href="/trainee/Application/home/Common/resource/font-awesome/css/font-awesome.min.css" rel="stylesheet"
type="text/css"/>
<link href="/trainee/Application/home/Common/resource/css/nivo-lightbox.css" rel="stylesheet"/>
<link href="/trainee/Application/home/Common/resource/css/nivo-lightbox-theme/default/default.css" rel="stylesheet"
type="text/css"/>
<link href="/trainee/Application/home/Common/resource/css/animations.css" rel="stylesheet"/>
<link href="/trainee/Application/home/Common/resource/css/style.css" rel="stylesheet">
<link href="/trainee/Application/home/Common/resource/color/default.css" rel="stylesheet">

<!-- Bootstrap Core CSS -->
<link href="/trainee/Application/home/Common/resource/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="/trainee/Application/home/Common/resource/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="/trainee/Application/home/Common/resource/vendor/datatables-plugins/dataTables.bootstrap.css"
rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="/trainee/Application/home/Common/resource/vendor/datatables-responsive/dataTables.responsive.css"
rel="stylesheet">

<!-- Custom CSS -->
<link href="/trainee/Application/home/Common/resource/dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="/trainee/Application/home/Common/resource/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
type="text/css">

<!-- =======================================================
Theme Name: Bocor
Theme URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
Author: BootstrapMade
Author URL: https://bootstrapmade.com
======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<section class="hero" id="intro">
<div class="container">
<div class="row">
<div class="col-md-12 text-right navicon">
<a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
</div>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center inner">
<div class="animatedParent">
<h1 name="test111">干部报名系统</h1>
<p>欢迎您！</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3 text-center">
<a href="#about" class="learn-more-btn btn-scroll">查看会议</a>
</div>
</div>
</div>
</section>


<!-- Navigation -->
<div id="navigation">
<nav class="navbar navbar-custom" role="navigation">
<div class="container">
<div class="row">
<div class="col-md-2">
<div class="site-logo">

<h1 style="font-size: 25px">干部报名系统</h1>
</div>
</div>


<div class="col-md-10">

<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
<i class="fa fa-bars"></i>
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="menu">
<ul class="nav navbar-nav navbar-right">

</ul>
</div>
<!-- /.Navbar-collapse -->

</div>
</div>
</div>
<!-- /.container -->
</nav>
</div>
<!-- /Navigation -->

<!-- Section: about -->
<section id="about" class="home-section color-dark bg-white">
<div class="container marginbot-50">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="animatedParent">
<div class="section-heading text-center animated bounceInDown">
<h2 class="h-bold">双击查看会议详情</h2>
<div class="divider-header"></div>
</div>
</div>
</div>
</div>

</div>

<div class="container">


<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">

    <div>
        双击查看会议详情
    </div>
</div>

<!-- /.panel-heading -->
<div class="panel-body">
<table width="100%" class="table table-striped table-bordered table-hover"
id="dataTables-example">
<thead>
<tr>
<th>会议名称</th>
<th>发起时间</th>
<th>结束时间</th>
<th>会议简介</th>
<th>状态</th>
<th>进入</th>
    <!-- Single button -->



</tr>
</thead>
<tbody>


<?php if(is_array($projects)): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?><tr class="odd gradeX" name="item" ondblclick="ItemOnClick(<?php echo ($project['id']); ?>)">
<td><?php echo ($project['pro_name']); ?></td>
<td><?php echo ($project['pro_time_start']); ?></td>
<td>
    <div name="pro_end">
        <?php echo ($project['pro_time_end']); ?>
    </div>

</td>
<td>
<?php echo ($project['pro_instruct']); ?>
</td>

<td >


    <button type="button" class="btn btn-default" name="bt_state"
    style="height: 30px;width: 80px"
    >
        <div name="state">
            <script>



                var end_time=document.getElementsByName("pro_end")[window.count++].innerText;

                var curDate=new Date();
                var myDate=curDate.toLocaleDateString();

                var arr_cur=myDate.split('/');
                var arr_end =end_time.split('-');

                var cur_year=parseInt(arr_cur[0]);
                var cur_month=parseInt(arr_cur[1]);
                var cur_day=parseInt(arr_cur[2]);
                var cur=cur_year*10000+cur_month*100+cur_day;

                var end_year=parseInt(arr_end[0]);
                var end_month=parseInt(arr_end[1]);
                var end_day=parseInt(arr_end[2]);
                var end=end_year*10000+end_month*100+end_day;

                if(cur<=end){
                    document.write("进行中");
                    document.getElementsByName("bt_state")[bt_count++].setAttribute('class','btn btn-success');


                }else{
                    document.write("已结束");
                    document.getElementsByName("bt_state")[bt_count++].setAttribute('class','btn btn-danger');

                }

            </script>
        </div>



    </button>


</td>


<td>

<a href="/trainee/Home/Index/login/pro_id/<?php echo ($project['id']); ?>" title="Look">
    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>

</a>

    </td>

    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>

</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->


</div>


</section>
<!-- /Section: about -->


<footer>
<div class="container">
<div class="row">
<div class="col-md-6">
<ul class="footer-menu">

</ul>
</div>
<div class="col-md-6 text-right copyright">
版权所有 © 2016 苏州大学信息化建设与管理中心
<div class="credits">
<!--
All the links in the footer should remain intact.
You can delete the links only if you purchased the pro version.
Licensing information: https://bootstrapmade.com/license/
Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bocor
-->


</div>
</div>
</div>
</div>
</footer>

<!-- Core JavaScript Files -->
<script src="/trainee/Application/home/Common/resource/js/jquery.min.js"></script>
<script src="/trainee/Application/home/Common/resource/js/bootstrap.min.js"></script>
<script src="/trainee/Application/home/Common/resource/js/jquery.sticky.js"></script>
<script src="/trainee/Application/home/Common/resource/js/jquery.easing.min.js"></script>
<script src="/trainee/Application/home/Common/resource/js/jquery.scrollTo.js"></script>
<script src="/trainee/Application/home/Common/resource/js/jquery.appear.js"></script>
<script src="/trainee/Application/home/Common/resource/js/stellar.js"></script>
<script src="/trainee/Application/home/Common/resource/js/nivo-lightbox.min.js"></script>

<script src="/trainee/Application/home/Common/resource/js/custom.js"></script>
<script src="/trainee/Application/home/Common/resource/js/css3-animate-it.js"></script>
<script src="/trainee/Application/home/Common/resource/contactform/contactform.js"></script>

<!-- jQuery -->
<script src="/trainee/Application/home/Common/resource/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/trainee/Application/home/Common/resource/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/trainee/Application/home/Common/resource/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="/trainee/Application/home/Common/resource/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/trainee/Application/home/Common/resource/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="/trainee/Application/home/Common/resource/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script src="/trainee/Application/home/Common/resource/dist/js/sb-admin-2.js"></script>

</body>

</html>