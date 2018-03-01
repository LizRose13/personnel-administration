<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
 // 命名空间表明当前类似是Admin模块下的控制器类
use Think\Controller; // 引入Think\Controller命名空间便于直接使用，继承的Controll来自与tp

class AdminController extends BaseController
{

    public  function  showAdmin(){

        $admin_id=$_SESSION['admin_id'] ;

        $admin=M('admin');
        $admininfo=$admin->where("id=$admin_id")->find();

        $this->assign("admininfo",$admininfo);
        $this->display();
    }



    public function  updatePwd(){
        $this->display();
    }

    public function  comfirmPwd(){

        $admin=M('admin');

        $admin_id=$_SESSION['admin_id'] ;
        $admininfo=$admin->where("$admin_id=id")->find();
        $admin_pwd=$admininfo['admin_pwd'];

        $old_pwd=$_POST['old_pwd'];
        $new_pwd=$_POST['new_pwd'];

        if($admin_pwd==$old_pwd){
            $admininfo['admin_pwd']=$new_pwd;
            $condition['id']=$_SESSION['admin_id'];


            if($admin->where($condition)->save($admininfo))
                $this->success("修改成功！");
            else
                $this->error("修改失败！");
            }
        else{
            $this->error("修改失败，请检查输入密码是否有误！");
        }
    }

}

