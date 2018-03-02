<?php
namespace app\common\validate;
use think\Validate;

class Tags extends Validate{
    protected $rule =[
        'name'=>'require|max:20',
    ];
    protected $message = [
        'name.max'=>'标签名不能超过20个字符',
        'name.require'=>'标签名不能为空',
    ];
}