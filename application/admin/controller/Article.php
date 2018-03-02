<?php
namespace app\admin\controller;
use app\admin\model\Articles;

class Article extends Base{

    public function ArticleList(){
        $page = input('post.page',1);
        $page_size = input('post.page_size',5);
        $artilce = new Articles();
        $list = $artilce->pageList($page,$page_size,[]);
        $this->result($list,200,'success','json');
    }
    public function detail($id){
        $detail = Articles::get($id);
        $this->result($detail,200,'success','json');
    }
    public function addContent(){
        $input_data = input('post.');
        $data = ['title'=>$input_data['title'],'desc'=>$input_data['desc'],'content'=>$input_data['content']];
        $check_res = $this->validate($data,'Articles');
        if(!is_bool($check_res)){
            $this->result([],201,$check_res,'json');
        }
        $res = Articles::create($data);
        $this->result($res,200,'success','json');
    }
    public function updateContent(){
        $input_data = input('post.');
        $model = new Articles();
        $validate = $this->validate($input_data,'Articles');
        if(!is_bool($validate)){
            $this->result([],201,$validate,'json');
        }
        $model->isUpdate(true)->save($input_data);
        $this->result([],200,'success','json');
    }
}