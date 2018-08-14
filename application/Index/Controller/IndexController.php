<?php
namespace app\Index\controller;
use think\Controller;
use think\Db;
class IndexController extends Controller{

    /**
     * 后台登录首页
     * @access public
     * return array
     * @author 丁野 2018-05-25 13:00:00
     */
    public function index(){
        $map = array();
        $data = DB("member")->where($map)->select();
        //print_r($data);
        //$this->assign("data",$data);
        //$this->display();
    }

    /**
     * 测试方法页面
     *
     * @author 丁野 2018-05-25 13:00:00
     */
    public function dylan(){
        $this->display();
    }

}
