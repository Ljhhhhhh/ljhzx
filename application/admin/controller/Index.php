<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Common {
    public function index(){
        halt(session('admin_name'));
        return $this->fetch();
    }
}