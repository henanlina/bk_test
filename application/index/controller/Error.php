<?php
namespace app\index\controller;

use think\Request;
class Error{
    //找不到指定控制器的时候会调用空控制器中的index方法
    //如果没有设置空控制器，访问的时候会直接报错
    public function index(Request $request){
        echo 'empty index';
//        var_dump($request->param);
        var_dump($request->param());
    }
}