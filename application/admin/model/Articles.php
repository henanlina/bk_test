<?php
namespace app\admin\model;
use think\Model;

class Articles extends Model{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';


    public function pageList($page=1,$page_size=10,$params=[]){
        $total_number = $this->count();
        $list = $this->page($page,$page_size)->select();
        $page_number = ceil($total_number/$page_size);
        return ['total_number'=>$total_number,'page_number'=>$page_number,'list'=>$list];
    }
}