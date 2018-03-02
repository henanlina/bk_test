<?php
namespace app\admin\logic;
class Users {
    public function info(){
        $data = session('member','');
        if(empty($data)){
            return '请先登录';
        }
        return $data;
    }
}