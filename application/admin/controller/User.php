<?php
namespace app\admin\controller;
use app\admin\logic\Users;
use think\Hook;

class User extends Base{
    public function userLoginInfo(){
        $users = new Users();
        $res = $users->info();
        Hook::add('add_login_log','app\admin\behavior\Tes');
        Hook::listen('add_login_log');
        if(is_array($res)){
            $this->result($res,200,'成功');
        }
        $this->result([],203,$res,'json');
    }
}