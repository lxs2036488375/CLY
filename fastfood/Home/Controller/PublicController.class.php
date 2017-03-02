<?php
//网站前台执行登录、退出、获取验证码和用户商家配送员的注册，短信、忘记密码等操作的控制器
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    //提供登录表单（载入登录页面）
	public function index(){
        
    }
	
	//执行登录（js验证用户名、密码、验证码）
	public function doLogin(){
		
	}
	
	//退出登录（清除session）
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
	
	//载入注册页面（用户）
	public function register(){
		
	}
	
	//将用户注册信息插入数据库
	public function insert(){
		
	}
	
	//载入商家注册页面
	public function sregister(){
		
	}
	
	//将商户注册信息插入数据库
	public function sinsert(){
		
	}
	
	//载入配送员注册页面
	public function dregister(){
		
	}
	
	//载入密码忘记页面
	public function forgetPW(){
		
	}
	
	//短信验证码方法
	public function messageCode(){
		
	}
}