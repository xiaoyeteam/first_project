<?php
namespace app\Admin\controller;
use think\Controller;
use think\Db;
use app\Admin\model\AdminModel;

use think\Loader;

class AdminController extends Controller{

    /**
     * 获取后台登录用户信息
     * @access public
     * return array
     * @author 丁野 2018-07-04 09:55:59
     */
    public function getAdmininfo(){
        //使用model助手函数实例化admin模型
        $res = Loader::model('Admin')->getAdmininfo();
        echo json_encode($res);
    }

}
