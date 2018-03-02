<?php
namespace app\admin\service;
use think\Model;

class Users extends Model {
    public function LoginByPassword($username,$password){
        if(empty($username)||empty($password)){
            return '参数不能为空';
        }
        $users = new \app\admin\model\Users();
        $info = $users->where('name',$username)->where('password',md5($password))->find();
        $_SESSION['member'] = $info;
        if(empty($info)){
            return '用户名或密码不正确';
        }
        return 200;
    }

}