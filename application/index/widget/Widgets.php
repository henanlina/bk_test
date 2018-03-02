<?php
namespace app\index\widget;
use think\Controller;

class Widgets extends Controller{
    public function  index(){
        return $this->fetch('widgets/index');
    }
}