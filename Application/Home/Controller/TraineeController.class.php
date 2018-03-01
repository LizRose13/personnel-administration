<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class TraineeController extends BaseController {

    public  function  showTrainee(){
        import("ORG.util.Page"); // 加载分页助手类

        $unit_id=$_SESSION['unit_id'];
        $trainee=M('trainee');

        $total=$trainee->count();
        $num_per_page =8; // 每页显示条数
        $page = new Page($total, $num_per_page);
        $limit=$page->firstRow.','.$page->listRows;
        $page->setConfig("header", "共".$total."个学员");
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $show = $page->show();

        $trainees=M('trainee')->where("$unit_id=unit_id")->select();
        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);

        $this->assign("trainees",$trainees);
        $this->assign("page", $show);
        $this->display();
    }


    public function  addTrainee(){
        $this->display();
    }

    public  function  add(){

        header("Content-Type:text/html; charset=utf-8");
        $unit_id=$_SESSION['unit_id'];
        $unit_name=$_SESSION['unit_name'];

        if (isset($_POST["add"])) {

            $trainee = M('trainee');

            $traineeinfo['tra_name']=$_POST['tra_name'];
            if($_POST['tra_sex']==0){
                $traineeinfo['tra_sex']="男";
            }else{
                $traineeinfo['tra_sex']="女";
            }
            $traineeinfo['tra_depart']=$_POST['tra_depart'];
            $traineeinfo['tra_job']=$_POST['tra_job'];
            $traineeinfo['tra_telephone']=$_POST['tra_telephone'];
            $traineeinfo['tra_fixphone']=$_POST['tra_fixphone'];
            $traineeinfo['tra_zidcode']=$_POST['tra_zidcode'];
            $traineeinfo['tra_email']=$_POST['tra_email'];
            $traineeinfo['tra_address']=$_POST['tra_address'];
            $traineeinfo['tra_remark']=$_POST['tra_remark'];
            $traineeinfo['unit_id']=$unit_id;
            $traineeinfo['unit_name']=$unit_name;


            if($trainee->add($traineeinfo)){
                $this->success('新增成功','showTrainee');
            }else{
                echo "<script>alert('添加失败')</script>";
            }

            M()->getLastsql();

        }

    }

    public  function  showDetailTrainee(){

        $trainee_id=$_GET['trainee_id'];

        $trainee=M('trainee');
        $traineeinfo=$trainee->where("$trainee_id=id")->find();

        $pro_name=$_SESSION['pro_name'];
        $this->assign("proname",$pro_name);
        $this->assign("traineeinfo",$traineeinfo);
        $this->display();

    }

    public  function  updateTrainee(){

        $trainee=M('trainee');

        $trainee_id=$_GET['trainee_id'];
        $trainee=M('trainee');

        $traineeinfo=$trainee->where("id=$trainee_id")->find();

        $this->assign("traineeinfo",$traineeinfo);
        $this->display();


    }

    public  function  update(){

        $trainee =M('trainee');

        $condition['id']=$_GET['trainee_id'];

        $traineeinfo['tra_name']=$_POST['tra_name'];
        if($_POST['tra_sex']==0){
            $traineeinfo['tra_sex']="男";
        }else{
            $traineeinfo['tra_sex']="女";
        }
        $traineeinfo['tra_depart']=$_POST['tra_depart'];
        $traineeinfo['tra_job']=$_POST['tra_job'];
        $traineeinfo['tra_telephone']=$_POST['tra_telephone'];
        $traineeinfo['tra_fixphone']=$_POST['tra_fixphone'];
        $traineeinfo['tra_zidcode']=$_POST['tra_zidcode'];
        $traineeinfo['tra_email']=$_POST['tra_email'];
        $traineeinfo['tra_address']=$_POST['tra_address'];
        $traineeinfo['tra_remark']=$_POST['tra_remark'];
        $traineeinfo['unit_id']=$_SESSION['unit_id'];

        if($trainee->where($condition)->save($traineeinfo)){
            $this->redirect("showTrainee",array(0),1,"修改成功！");
        }else{
            $this->error("修改失败！");
        }


    }

    public  function  delete(){

        $trainee=M('trainee');
        $trainee_id=$_GET['trainee_id'];

        if($trainee->where("$trainee_id=id")->delete()==1){
            $this->success("删除成功！");
        }
    }

    public function  batchDelete(){
        $source=$_POST['data'];
        $sel_arr=explode(' ',$source);

        $state=1;
        $trainee=M('trainee');
        foreach ($sel_arr as $item) {
            if (($projectinfo = $trainee->where("id=$item")->delete()) != 1) {
                if($item!=null){  //有一个item
                    $state=0;
                }
            }
        }
        echo $state;
    }


}