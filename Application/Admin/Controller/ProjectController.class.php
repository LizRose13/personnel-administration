<?php
    namespace Admin\Controller;

    use Think\Controller;
    use Think\Page;

    class ProjectController extends BaseController
    {

    public function index()
    {
    $this->display();
    }

    /*
    * 导出学员信息excel
    */
    function  expTrainee(){

    $project_id=$_GET['pro_id'];

    $xlsName  = "Trainee";
    $xlsCell  = array(

        array('tra_name','学员名称'),
        array('tra_sex','学员性别'),
        array('unit_name','单位名称'),
        array('tra_depart','院系'),
        array('tra_job','职务'),
        array('tra_telephone','移动电话'),
        array('tra_fixphone','固定电话'),
        array('tra_zidcode','邮编'),
        array('tra_email','电子邮箱'),
        array('tra_address','地址'),
        array('tra_remark','备注')
    );


    $xlsModel = M('trainee');

    $xlsData  = $xlsModel->Field('tra_name,tra_sex,unit_name,tra_depart,tra_job
    ,tra_telephone,tra_fixphone,tra_zidcode,tra_email,tra_address,tra_remark')
        ->select()
    ;
            foreach ($xlsData as $k => $v)
            {
                $xlsData[$k]['sex']=$v['sex']==1?'男':'女';
            }

    $this->exportExcel($xlsName,$xlsCell,$xlsData);

    }


    /**
    *
    * 导出单位信息Excel
    */
    function expUser(){//导出Excel

    $project_id=$_GET['pro_id'];

    $xlsName  = "User";
    $xlsCell  = array(

        array('unit_name','单位名称'),
        array('unit_user','用户名'),
        array('unit_pwd','密码'),
        array('repo_name','通讯员'),
        array('repo_phone','通讯员电话'),
        array('repo_email','通讯员邮箱'),
        array('unit_zipcode','邮编'),
        array('unit_address','地址'),
        array('unit_limit','人数限制'),
        array('unit_remark','备注')
    );
    $xlsModel = M('unit');

    $xlsData  = $xlsModel->Field('unit_name,unit_user,unit_pwd,repo_name,repo_phone
    ,repo_email,unit_zipcode,unit_address,unit_limit,unit_remark')
        ->where("$project_id=pro_id")->order('id asc')->select();
    //        foreach ($xlsData as $k => $v)
    //        {
    //            $xlsData[$k]['sex']=$v['sex']==1?'男':'女';
    //        }

    $this->exportExcel($xlsName,$xlsCell,$xlsData);
//      var_dump($xlsData);

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

    public function  addProject()
    {
    $this->display();
    }


    public  function  updateProject(){

    $project=M('project');

    $project_id=$_GET['pro_id'];
    $projectinfo=$project->where("id=$project_id")->find();

    $this->assign("projectinfo",$projectinfo);
    $this->display();
    }


    public function delete(){
    $project=M('project');

    $project_id= $_GET['pro_id'];
    if(($project->where("$project_id=id")->delete())==1){
        $this->success("删除成功",0,1);
    }else{
        $this->error("删除失败，请先删除所含参加单位！",0,1);
    }
    }

    public function batchDelete(){
    $source=$_POST['data'];
    $sel_arr=explode(' ',$source);

    $state=1;
    $project=M('project');
    foreach ($sel_arr as $item) {
        if (($projectinfo = $project->where("id=$item")->delete()) != 1) {
            if($item!=null){  //有一个item
                $state=0;
            }
        }
    }
    echo $state;
    }



    public function showDetailProject(){
    $project_id=$_GET['pro_id'];

    $project=M('project');
    $projectinfo=$project->where("id=$project_id")->find();
    $this->assign("projectinfo",$projectinfo);

    import("ORG.util.Page"); // 加载分页助手类
    $unit = M('unit');
    $units = $unit->where("$project_id=pro_id")->select();


    $total= 0;
    foreach ($units as $item){
        $total++;
    }

    $num_per_page =8; // 每页显示条数
    $page = new Page($total, $num_per_page);
    $limit=$page->firstRow.','.$page->listRows;
    $page->setConfig("header", "共".$total."个单位");
    $page->setConfig('prev','上一页');
    $page->setConfig('next','下一页');
    $page->setConfig('last','末页');
    $page->setConfig('first','首页');
    $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

    $show = $page->show();
    $units=$unit->where("$project_id=pro_id")->order('id asc')->limit($limit)->select();


    $this->assign("units", $units);
    $this->assign("pro_id", $project_id);
    $this->assign("page",$show);
    $this->display();
    }


    public function update(){
    $project=M('project');

    $condition['id']=$_GET['pro_id'];

    $projectinfo['pro_name'] = $_POST['pro_name'];
    $projectinfo['pro_time_start'] = $_POST['pro_time_start'];
    $projectinfo['pro_time_end'] = $_POST['pro_time_end'];
    $projectinfo['pro_instruct'] = $_POST['pro_instruct'];
    $projectinfo['pro_remark'] = $_POST['pro_remark'];
    $projectinfo['pro_limit'] = $_POST['pro_limit'];
    $projectinfo['pro_isFirst'] = $_POST['pro_isFirst'];
    $projectinfo['pro_isConfirm'] = $_POST['pro_isConfirm'];

    if($project->where($condition)->save($projectinfo))
    {

        $this->redirect("showProject",array(0),1,"修改成功！");
    }else{
        $this->error("修改失败！");
    }
    }

    public function add()
    {
    header("Content-Type:text/html; charset=utf-8");
    if (isset($_POST["add"])) {

        $project = M('project');

        $projectinfo['pro_name'] = $_POST['pro_name'];
        $projectinfo['pro_time_start'] = $_POST['pro_time_start'];
        $projectinfo['pro_time_end'] = $_POST['pro_time_end'];
        $projectinfo['pro_instruct'] = $_POST['pro_instruct'];
        $projectinfo['pro_remark'] = $_POST['pro_remark'];
        $projectinfo['admin_id'] = $_SESSION['admin_id'];
        $projectinfo['pro_limit'] = $_POST['pro_limit'];
        $projectinfo['pro_isFirst'] = $_POST['pro_isFirst'];

        if($project->add($projectinfo)){
            $this->success('新增成功','showProject');
        }else{
            echo "<script>alert('添加失败')</script>";
        }

        M()->getLastsql();

    }
    }

    public function showProject()
    {

    if($_POST['ids']){
        var_dump($_POST['ids']);
    }
    import("ORG.util.Page"); // 加载分页助手类
    $project = M('project');

    $total = $project->count();
    $num_per_page =8; // 每页显示条数
    $page = new Page($total, $num_per_page);
    $limit=$page->firstRow.','.$page->listRows;
    $page->setConfig("header", "共".$total."个项目");
    $page->setConfig('prev','上一页');
    $page->setConfig('next','下一页');
    $page->setConfig('last','末页');
    $page->setConfig('first','首页');
    $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');


    $show = $page->show();
    //$projects = $project->select();
    $projects=M('project')->order('AddTime desc,id asc')->limit($limit)->select();

    $admin_id=$_SESSION['admin_id'];
    $admininfo=M('admin')->where("$admin_id=id")->find();

    $this->assign("projects", $projects);
    $this->assign("page", $show);
    $this->assign("admininfo",$admininfo);

    $this->display();


    }
    }
