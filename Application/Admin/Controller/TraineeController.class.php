<?php
/**
 * Created by PhpStorm.
 * User: LizYang
 * Date: 2016/11/23
 * Time: 18:59
 */

namespace Admin\Controller;


use Think\Controller;
use Think\Page;

class TraineeController  extends  BaseController
{

    public function index()
    {
        $this->display();
    }



    /**
     *
     * 导出Excel
     */
    function expUser(){//导出Excel

        $unit_id=$_GET['unit_id'];

        $xlsName  = "User";
        $xlsCell  = array(
            array('tra_name','学员名称'),
            array('tra_sex','学员性别'),
            array('tra_depart','院系'),
            array('tra_job','职务'),
            array('tra_telephone','移动电话'),
            array('tra_fixphone','固定电话'),
            array('tra_zidcode','邮编'),
            array('tra_email','电子邮箱'),
            array('tra_address','地址'),
            array('tra_remark','备注'),

        );
        $xlsModel = M('trainee');

        $xlsData  = $xlsModel->Field('tra_name,tra_sex,tra_depart,tra_job,tra_telephone
        ,tra_fixphone,tra_zidcode,tra_email,tra_address,tra_remark')
            ->where("$unit_id=unit_id")->order('id asc')->select();

        $this->exportExcel($xlsName,$xlsCell,$xlsData);

//        echo $unit_id;
//        var_dump($xlsData);

    }
    //导出excle
    public function exportExcel($expTitle,$expCellName,$expTableData){

        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $_SESSION['account'].date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);

        vendor("PHPExcel.PHPExcel");

        $objPHPExcel = new \PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');

        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]);
        }
        // Miscellaneous glyphs, UTF-8
        for($i=0;$i<$dataNum;$i++){
            for($j=0;$j<$cellNum;$j++){
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
            }
        }

        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
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
        echo 1;
    }
    public function  showTrainee(){

        $unit_id=$_GET['unit_id'];

        import("ORG.util.Page"); // 加载分页助手类
        $trainee = M('trainee')->where("$unit_id=unit_id");


        $total = $trainee->count();
        $num_per_page = 8; // 每页显示条数
        $page = new Page($total, $num_per_page);
        $limit=$page->firstRow.','.$page->listRows;
        $page->setConfig("header", "共".$total."个学员");
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $show = $page->show();
        $trainees = $trainee->where("$unit_id=unit_id")->order('id asc')->limit($limit)->select();


        $this->assign("unit_id",$unit_id);
        $this->assign("trainees", $trainees);
        $this->assign("page", $show);

        $this->display();

    }

    public function showDetailTrainee(){
        $trainee_id=$_GET['trainee_id'];

        $trainee=M('trainee');
        $traineeinfo=$trainee->where("$trainee_id=id")->find();

        $this->assign("traineeinfo",$traineeinfo);
        $this->display();

    }

    public function update(){
        $trainee=M('trainee');

        $condition['id']=$_GET['trainee_id'];

        $traineeinfo['tra_name']=$_POST['tra_name'];
        $traineeinfo['tra_sex']=$_POST['tra_sex'];
        $traineeinfo['tra_name']=$_POST['tra_name'];
        $traineeinfo['tra_depart']=$_POST['tra_depart'];
        $traineeinfo['tra_job']=$_POST['tra_job'];
        $traineeinfo['tra_telephone']=$_POST['tra_telephone'];
        $traineeinfo['tra_fixphone']=$_POST['tra_fixphone'];
        $traineeinfo['tra_zidcode']=$_POST['tra_zidcode'];
        $traineeinfo['tra_email']=$_POST['tra_email'];
        $traineeinfo['tra_address']=$_POST['tra_address'];
        $traineeinfo['tra_remark']=$_POST['tra_remark'];



        if($trainee->where($condition)->save($traineeinfo))
        {
            $this->redirect("showTrainee",array(0),1,"修改成功！");

        }else{
            $this->error("修改失败");
        }

    }

    public function delete(){
        $trainee=M('trainee');

        $trainee_id=$_GET['trainee_id'];
        if(($trainee->where("$trainee_id=id")->delete())==1){
            $this->success("删除成功");
        }
        else{
            $this->success("删除失败");
        }
    }


    public function  updateTrainee(){
        $trainee=M('trainee');

        $trainee_id=$_GET['trainee_id'];
        $traineeinfo=$trainee->where("$trainee_id=id")->find();

        $this->assign("traineeinfo",$traineeinfo);

        $this->display();
    }



}