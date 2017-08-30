<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Login extends Controller{
    protected $db;
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db=new \app\admin\model\Login();
    }
    public function Login(Request $request){
        if($request->isPost()){
            $res=$this->db->login(input('post.'));
            if($res){
                $this->success('登录成功','index/index');exit;
            }else{
                $this->error("登录失败");exit;
            }
        }
        return $this->fetch();
    }
}