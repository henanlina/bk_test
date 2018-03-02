<?php
namespace app\admin\behavior;
use think\Log;

class Tes{
    public function addLoginLog(){
        Log::info('aaaaaa'.'---add_login_log');
    }
}