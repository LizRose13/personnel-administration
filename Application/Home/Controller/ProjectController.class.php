<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function index(){

    }

    public  function  showDetailProjectSmall(){

        $pro_id=$_GET['pro_id'];
        $project = M('project');

        $projectinfo=M('project')->where("id=$pro_id")->find();

        $this->assign("projectinfo", $projectinfo);
        $this->display();
    }

    public function showUnitProject(){

        $pro_id=$_SESSION['pro_id'];
        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);
        $unit_name=$_SESSION['unit_name'];


        $projectinfo=M('project')->where("$pro_id=id")->find();

        $this->assign("projectinfo",$projectinfo);

        $this->assign("unitname",$unit_name);


        $this->display();

    }

}