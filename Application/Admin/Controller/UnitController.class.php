<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;
use Vendor\PHPExcle\PHPExcel;
use Org\Util\UploadFile;

class UnitController extends BaseController
{
    public function batchDelete(){

        $source=$_POST['data'];
        $sel_arr=explode(' ',$source);

        $state=1;
        $unit=M('unit');
        foreach ($sel_arr as $item) {
            if (($unitinfo = $unit->where("id=$item")->delete()) != 1) {
                if($item!=null){  //有一个item
                    $state=0;
                }
            }
        }

        echo 1;
    }


    public function showUnit()
    {
        import("ORG.util.Page"); // 加载分页助手类

        $pro_id = $_GET['pro_id'];
        $unit = M('unit');

        $total=$unit->where("$pro_id=pro_id")->count();
        $num_per_page=8;
        $page=new Page($total,$num_per_page);
        $limit=$page->firstRow.','.$page->listRows;
        $page->setConfig("header", "共".$total."个单位");
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $show=$page->show();
        $units=M('unit')->where("$pro_id=pro_id")->order('id asc')->limit($limit)->select();


        for($count=0;$count<count($units);$count++){
            $unit_id=$units[$count]['id'];
            $trainee_count=M('trainee')->where("$unit_id=unit_id")->count();
            $units[$count]['unit_count']=$trainee_count;

        }


        $this->assign("units", $units);
        $this->assign("page", $show);
        $this->assign("pro_id", $pro_id);
        $this->display();
    }
    
    // 导入excle
    public function impUnit()
    {
        
        // $_GET['pro_id']
        $unit['pro_id'] = $_GET['pro_id'];
        
        if (! empty($_FILES)) {
            
            import("ORG.util.UploadFile");
            
            $config = array(
                'allowExts' => array(
                    'xlsx',
                    'xls'
                ),
                'savePath' => './Public/upload/',
                'saveRule' => 'time'
            );
            
            import("Org.Util.UploadFile");
            
            $upload = new \UploadFile($config);
            if (! $upload->upload()) {
                $this->error($upload->getErrorMsg());
            } else {
                $info = $upload->getUploadFileInfo();
            }
            
            vendor("PHPExcel.PHPExcel");
            $file_name = $info[0]['savepath'] . $info[0]['savename'];
            
            import("Vendor.PHPExcel.PHPExcel.IOFactory", dirname(__FILE__), ".php");
            
            $objReader = \PHPExcel_IOFactory::createReader('Excel2007');
            $objPHPExcel = $objReader->load($file_name, $encode = 'utf-8');
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            
            for ($i = 2; $i <= $highestRow; $i ++) {
                
                $unit['unit_name'] = $objPHPExcel->getActiveSheet()
                    ->getCell("A" . $i)
                    ->getValue();
                $unit['unit_user'] = $objPHPExcel->getActiveSheet()
                    ->getCell("B" . $i)
                    ->getValue();
                $unit['unit_pwd'] = $objPHPExcel->getActiveSheet()
                    ->getCell("C" . $i)
                    ->getValue();
                $unit['repo_name'] = $objPHPExcel->getActiveSheet()
                    ->getCell("D" . $i)
                    ->getValue();
                $unit['repo_phone'] = $objPHPExcel->getActiveSheet()
                    ->getCell("E" . $i)
                    ->getValue();
                $unit['repo_email'] = $objPHPExcel->getActiveSheet()
                    ->getCell("F" . $i)
                    ->getValue();
                $unit['unit_zipcode'] = $objPHPExcel->getActiveSheet()
                    ->getCell("G" . $i)
                    ->getValue();
                $unit['unit_address'] = $objPHPExcel->getActiveSheet()
                    ->getCell("H" . $i)
                    ->getValue();
                $unit['unit_limit'] = $objPHPExcel->getActiveSheet()
                    ->getCell("I" . $i)
                    ->getValue();
                $unit['unit_remark'] = $objPHPExcel->getActiveSheet()
                    ->getCell("J" . $i)
                    ->getValue();
                
                if (! M('unit')->add($unit)) {
                    echo "<script>alert('导入失败')</script>";
                    return;
                }
            }
            $this->redirect("showUnit",array('pro_id'=>5),1,导入成功);

        } else {
            echo "<script>alert('访问文件错误')</script>";



        }
    }

    public function addUnit()
    {
        $pro_id = $_GET['pro_id'];
        $this->assign('pro_id', $pro_id);
        $this->display();
    }

    public function  updateUnit(){

        $unit=M('unit');
        $pro_id=$_GET['pro_id'];

        $unit_id=$_GET['unit_id'];
        $unit_info=$unit->where("id=$unit_id")->find();

        $this->assign("unit_info",$unit_info);

        $this->assign("unit_id",$unit_id);
        $this->assign("pro_id",$pro_id);
        $this->display();

    }

    public function update(){
        $unit=M('unit');

        $pro_id=$_GET['pro_id'];

        $condition['id']=$_GET['unit_id'];

        $unitinfo['unit_name']=$_POST['unit_name'];
        $unitinfo['unit_user']=$_POST['unit_user'];
        $unitinfo['unit_pwd']=$_POST['unit_pwd'];
        $unitinfo['repo_name']=$_POST['repo_name'];
        $unitinfo['repo_phone']=$_POST['repo_phone'];
        $unitinfo['repo_email']=$_POST['repo_email'];
        $unitinfo['unit_zipcode']=$_POST['unit_zipcode'];
        $unitinfo['unit_address']=$_POST['unit_address'];
        $unitinfo['unit_limit']=$_POST['unit_limit'];
        $unitinfo['unit_remark']=$_POST['unit_remark'];

        if(($unit->where($condition)->save($unitinfo))){
           $this->redirect('Unit/showUnit', array('pro_id' => $pro_id), 1,'修改成功，页面跳转中！');
        }else {
            $this->error('修改失败！');
        }
    }



    public function  delete(){
        $unit=M('unit');

        $unit_id=$_GET['unit_id'];
        if(($unit->where("$unit_id=id")->delete())==1){
            $this->success("删除成功");
        }
        else{
            $this->success("删除失败");
        }
    }

    public function showDetailUnit(){

        $unit_id=$_GET['unit_id'];

        $unit=M('unit');
        $unitinfo=$unit->where("$unit_id=id")->find();

        $this->assign("unitinfo",$unitinfo);
        $this->display();
    }



    public function add()
    {
        header("Content-Type:text/html; charset=utf-8");
        if (isset($_POST["add"])) {
            $unit = M('unit');
            
            $unitinfo['unit_name'] = $_POST['unit_name'];
            $unitinfo['pro_id'] = $_GET['pro_id'];
            $unitinfo['unit_user'] = $_POST['unit_user'];
            $unitinfo['unit_pwd'] = $_POST['unit_pwd'];
            $unitinfo['repo_name'] = $_POST['repo_name'];
            $unitinfo['repo_phone'] = $_POST['repo_phone'];
            $unitinfo['repo_email'] = $_POST['repo_email'];
            $unitinfo['unit_zipcode'] = $_POST['unit_zipcode'];
            $unitinfo['unit_address'] = $_POST['unit_address'];
            $unitinfo['unit_limit'] = $_POST['unit_limit'];
            $unitinfo['unit_remark'] = $_POST['unit_remark'];


            $pro_id =$_GET['pro_id'];

            if ($unit->add($unitinfo)) {
                echo "<script>alert('添加成功')</script>";
                $this->redirect('Unit/showUnit', array('pro_id' => $pro_id), 0,'页面跳转中...');

            } else {
                echo "<script>alert('添加失败,分配账户账户重复！')</script>";
                $this->redirect('Unit/addUnit',array('pro_id'=> $pro_id),2,'页面返回中');
            }
        }
    }
}
