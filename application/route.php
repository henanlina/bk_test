<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
/*
\think\Route::get('hello',function (){
   return 'hello world!';
});*/

//\think\Route::resource('blog','index/Blog');
//\think\Route::resource('tag','admin/Tag');
/*\think\Route::any('admin/list','admin/Article/ArticleList');
\think\Route::get('admin/detail/:id','admin/Article/detail');*/
/*\think\Route::post('admin/add','admin/Article/addContent');
\think\Route::post('admin/update','admin/Article/updateContent');*/
/*\think\Route::post('login','admin/Login/loginByPassword');//登录
\think\Route::post('login_info','admin/User/userLoginInfo');//获取登录信息*/

return [
    '__pattern__' => [
        'name' => '\w+','json'=>'\w+'
    ],
    '[bk]'=>[
        'articles'=>['admin/Article/ArticleList',['method'=>'get']],//文章列表
        'detail/:id'=>['admin/Article/detail',['method'=>'get']],//文章详情
    ],
    '[user]'=>[
        'add'=>['admin/Article/addContent',['method'=>'post']],//新文章发布
        'update'=>['admin/Article/updateContent',['method'=>'post']],//更新文章内容
        'login'=>['admin/Login/loginByPassword',['method'=>'post']],//登录
        'user_info'=>['admin/User/userLoginInfo',['method'=>'post']],//获取登录信息
    ],
    '__rest__'=>[
        'tag'=>'admin/Tag'
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+'],'cache'=>3600],
        ':name' => ['index/hello', ['method' => 'post']],
        ':json' => ['index/json_test', ['method' => 'get']],
    ],
    '[project]'=>[
        'dyb'=>['project.dyb/index'],
        'yys'=>['project.yys/index'],
    ],
    '[test]'=>[
        ':id'=>['test/base']
    ],
//    'test'=>['test/test',['method'=>'get']],
    'test3'=>['test/test3',['method'=>'get']],
    'test4'=>['test/test4',['method'=>'get']],
    'url_test'=>['test/url_test',['method'=>'get']],
    'test2/:id'=>['test/test2',['method'=>'get']],
    'city/:name'=>['city/index',['method'=>'get']],
    '__miss__'=> 'common/miss',

];
