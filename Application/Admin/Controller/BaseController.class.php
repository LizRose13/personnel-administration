<?php
/**
 * Created by PhpStorm.
 * User: LizYang
 * Date: 2016/12/23
 * Time: 18:12
 */

namespace Admin\Controller;


use Think\Controller;

class BaseController extends  Controller
{
        public function __construct()
        {
            parent::__construct();
            $adminid = $_SESSION['admin_id'];
            if (!isset($adminid)) {
                $this->redirect("Admin/Index/index");

            }
        }

//        public  function isLogin(){
//            $adminid = $_SESSION['admin_id'];
//            if (!isset($adminid)) {
//                $this->redirect("Admin/Index/index");
//            }
//        }

}