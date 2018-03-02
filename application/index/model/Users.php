<?php
namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class Users extends Model{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    /*protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';
    protected $autoWriteTimestamp = false;
    */
    protected $readonly = ['name','email'];
    protected function initialize()
    {
        parent::initialize();
        echo 'initialize','<br>';
    }

    /*public static function init(){
        echo 'init';
    }*/
}
