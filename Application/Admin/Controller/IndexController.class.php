<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
 // 命名空间表明当前类似是Admin模块下的控制器类

use Think\Controller; // 引入Think\Controller命名空间便于直接使用，继承的Controll来自与tp

import("Org.util.page");

class IndexController extends  Controller
{


    public function loginout(){
       $_SESSION = array(); //清除SESSION值.
          if(isset($_COOKIE[session_name()])){  //判断客户端的cookie文件是否存在,存在的话将其设置为过期.
                setcookie(session_name(),'',time()-1,'/');
                   }
                session_destroy();  //清除服务器的sesion文件
                $this->redirect('index');
    }


    public function index()
    {
        $adminid = $_SESSION['admin_id'];
        $this->display();
    }

    public function login()
    {
        $admin_name = $_POST['admin_name'];
        $admin_pwd = $_POST['admin_pwd'];

        $admin = M('admin');
        $admins = $admin->select();
        $admin_id;

        $flag = false;
        foreach ($admins as $admin) {
            if ($admin['admin_name'] == $admin_name) {
                if ($admin['admin_pwd'] == $admin_pwd) {
                    $flag = true;
                    $admin_id = $admin['id'];
                }
            }
        }

        if ($flag == true) {
            echo "<script> alert('管理员登陆成功')</script>";
            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['admininfo']=$admininfo;
            // $this->success("登陆成功",'/project/demo1/index.php/admin/Project/showProject');
            $this->redirect("Project/showProject", "", 0, "aaa");
        } else {
            echo "<script> alert('管理员登陆失败')</script>";
            $this->error("登陆失败");
        }
    }
}