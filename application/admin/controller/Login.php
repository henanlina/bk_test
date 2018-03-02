<?php
namespace app\admin\controller;
use app\admin\service\Users;

class Login extends Base{
    public function login(){
        $username = input('post.username','');
        $password = input('post.password','');
        $users = new Users();
        $res = $users->LoginByPassword($username,$password);
        if($res===200){
            $this->result([],200,'success','json');
        }
        $this->result([],202,$res,'json');
    }
}