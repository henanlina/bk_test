<?php
namespace app\index\controller\project;

use think\Controller;

class Dyb extends Controller{
    public function index(){
        return $this->fetch();
    }

    public function detail(){
        echo 'dyb detail','<br>';
    }
}