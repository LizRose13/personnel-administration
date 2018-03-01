<?php

/**
 * Created by PhpStorm.
 * User: LizYang
 * Date: 2016/12/20
 * Time: 18:43
 */

namespace Admin\Controller;
// 命名空间表明当前类似是Admin模块下的控制器类
use Think\Controller; // 引入Think\Controller命名空间便于直接使用，继承的Controll来自与tp

class myController extends  Controller
{
    public function _initialize(){
        $username=session('username');
        if(!isset($username)){
            $this->redirect(GROUP_NAME.'/Index/index');
        }else{
            echo "存在";
        }
    }
}
