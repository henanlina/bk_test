<?php

namespace app\admin\controller;

use app\admin\model\Tags;
use think\Controller;
use think\Request;
use think\Response;

class Tag extends Controller
{
    /**
     * 显示标签列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Tags::all();
        $this->result($list,200,'success','json');
    }

    /**
     * 创建标签
     *
     * @return \think\Response
     */
    public function create()
    {
        $input_data = input('get.');
        $validate = $this->validate($input_data,'Tags');
        if(!is_bool($validate)){
            $this->result($validate,201,$validate,'json');
        }
        $res = Tags::create($input_data);
        $this->result($res,200,'success','json');
    }

    /**
     * 更新标签
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        $input_data = $request->post();
        $validate = $this->validate($input_data,'Tags');
        if(!is_bool($validate)){
            $this->result($validate,201,$validate,'json');
        }
        $tags = new Tags();
        $tags->isUpdate(true)->save($input_data);
        $this->result([],200,'success','json');
    }

    /**
     * 获取指定标签内容
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $res = Tags::get($id);
        $this->result($res,200,'success','json');
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {

    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        $input_data = ['id'=>$id,'status'=>0];
        $tags = new Tags();
        $tags->isUpdate(true)->save($input_data);
        $this->result([],200,'成功','json');
    }
}
