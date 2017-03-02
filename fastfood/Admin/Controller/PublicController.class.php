<?php
//网站后台执行登录、退出和获取验证码的控制器
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    //载入登录界面
	public function login(){
        
    }
	
	//执行登录验证
	public function doLogin(){
		
	}
	
	//执行退出
	public function doLogout(){
		
	}
	
	//验证码的输出
	public function verify(){
		$Verify = new \Think\Verify();
        $Verify->length = 4; //验证码位数
        //$Verify->useCurve = false; //是否使用混淆曲线 默认为true
        $Verify->useNoise = false; //是否添加杂点 默认为true
        
        $Verify->entry();
	}
}