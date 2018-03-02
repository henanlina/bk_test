<?php
namespace app\admin\model;
use think\Model;

class Tags extends Model{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'created_at';
    protected $updateTime = false;
}