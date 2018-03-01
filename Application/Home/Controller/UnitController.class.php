<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class UnitController extends BaseController {


    public function  showUnit(){

        $unit_id=$_SESSION['unit_id'];
        $pro_name=$_SESSION['pro_name'];

        $unitinfo=M('unit')->where("id=$unit_id")->find();

        $this->assign("unitinfo",$unitinfo);
        $this->assign("proname",$pro_name);
        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);
        $this->display();
    }

    public  function updateUnit(){
        $unit_id=$_SESSION['unit_id'];

        $unitinfo=M('unit')->where("id=$unit_id")->find();

        $this->assign("unitinfo",$unitinfo);
        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);
        $this->display();


    }

    public  function  update(){
        $unit_id=$_SESSION['unit_id'];
        $unit=M('unit');

        $condition['id']=$unit_id;

        $unitinfo['unit_name']=$_POST['unit_name'];
        $unitinfo['repo_name']=$_POST['repo_name'];
        $unitinfo['repo_phone']=$_POST['repo_phone'];
        $unitinfo['repo_email']=$_POST['repo_email'];
        $unitinfo['unit_zipcode']=$_POST['unit_zipcode'];
        $unitinfo['unit_address']=$_POST['unit_address'];
        $unitinfo['unit_limit']=$_POST['unit_limit'];
        $unitinfo['unit_remark']=$_POST['unit_remark'];



        if($unit->where($condition)->save($unitinfo)){
            $this->redirect("showUnit",array(0),1,"修改成功！");
        }else{
            $this->error("修改失败！");
        }


    }


    public function updatePwd(){
        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);
        $this->display();
    }

    public  function  updatepassword(){

        $unit_id=$_SESSION['unit_id'];
        $new_pwd=$_POST['new_pwd'];
        $new_pwd_again=$_POST['new_pwd_again'];
        $old_pwd=$_POST['unit_pwd'];

        $unit=M('unit');

        $condition['id']=$unit_id;
        $unitinfo['unit_pwd']=$new_pwd;

        $unit_ex=$unit->where($condition)->find();

        if($new_pwd!=$new_pwd_again){
            $this->error("输入两次密码不一致！");
        }

        if($unit_ex['unit_pwd']==$old_pwd){
            if($unit->where($condition)->save($unitinfo)){
                $this->redirect("showUnit",array(0),1,"修改成功！");
            }
            $this->error("修改失败！");
        }else {
            $this->error("修改失败,输入旧密码错误！");
        }


        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);

    }
}