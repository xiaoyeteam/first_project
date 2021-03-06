<?php
namespace app\Admin\model;
use think\Model;
    class AdminModel extends model{
        // 设置当前模型对应的完整数据表名称
        protected $table = 'app_member';
        //自定义初始化
        protected function initialize()
        {
            parent::initialize(); // TODO: Change the autogenerated stub
        }
        /**
         * @access public
         * @param  type
         * @return array
         * @author 丁野   2018-07-04 10:20:12 获取后台用户信息
         */
        public function getAdmininfo(){
            $data = DB::name("member")->field()->select();
            foreach ($data as $k=>$v){
                if($v['add_time']){
                    $data['add_time'] = date("Y-m-d,H:i:s",$v['add_time']);
                }
            }
            return array(
                'code'=>'0',
                'msg'=>'',
                'info'=>array(
                    'list'=>$data,
                    'count' => count($data),
                ),
                'error'=>'',
            );
        }
        /**
         * @access public
         * @param  type
         * @return array
         * @author 丁野   2018-07-04 10:27:42
         */
        public function dyalndylan(){


        }
    }
?>