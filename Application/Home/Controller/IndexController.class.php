<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
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

        $project = M('project');

        $projects = M('project')->where('pro_isFirst=1')->order('pro_time_start desc')->select();

//        $curDate = date('Y-m-d', time());
//
//        for ($i = 0; $i < $projects . count(); $i++) {
//            $project_info = $projects[i];
//            $endtime = $project_info['pro_time_end'];
//
//            if ($endtime < $curDate) {
//                $projects[i]['pro_time_end'] = "已结束";
//            } else {
//                $projects[i]['pro_time_end'] = "进行中";
//            }
//        }
//

        $test="hah";
        $this->assign("projects", $projects);
        $this->display();
    }

    public function login()
    {

        $pro_id = $_GET['pro_id'];
        $project = M('project');

        $projectinfo = M('project')->where("id=$pro_id")->find();

        $this->assign("projectinfo", $projectinfo);
        $this->display();

    }

    public function loginin()
    {
        $unit_user = $_POST['unit_user'];
        $unit_pwd = $_POST['unit_pwd'];

        $unit = M('unit');
        $units = $unit->select();

        $flag = false;
        $pro_id = 0;
        $unit_id = 0;
        $unit_info = $units[0];
        foreach ($units as $unitinfo) {
            if ($unitinfo['unit_user'] == $unit_user) {
                if ($unitinfo['unit_pwd'] == $unit_pwd) {
                    $flag = true;
                    $unit_info = $unitinfo;
//                    var_dump($unit_info);
                }
            }
        }


        if ($flag == true) {
            $pro_id = $_GET['pro_id'];
            $projectinfo = M('project')->where("id=$pro_id")->find();
            $_SESSION['pro_name']=$projectinfo['pro_name'];


            if ($unit_info['pro_id'] == $pro_id) {
                $unit_id = $unit_info['id'];

                $_SESSION['pro_id'] = $pro_id;
                $_SESSION['unit_id'] = $unit_id;
                $_SESSION['unit_name']=$unit_info['unit_name'];

                echo "<script> alert('用户登陆成功')</script>";
                $this->redirect("__APP__/Home/Project/showUnitProject");


            } else {
                $this->error(" 登陆失败!请检查是否参加该会议", 0, 1);

            }
        } else {
            $this->error(" 登陆失败!密码错误", 0, 1);
        }


    }

}