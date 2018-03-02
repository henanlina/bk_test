<?php
namespace app\index\controller;
class Common{
    public function miss(){
        echo 'miss';
        return view('public/404');
    }
}