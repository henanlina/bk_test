<?php
namespace app\common\validate;

use think\Validate;

class Articles extends Validate{
    protected $rule=[
        'title'=>'require|max:25',
    ];
    protected $message = [
        'title.require'=>'标题必须',
        'title.max'=>'标题最多不能超过2个字符',
    ];
}