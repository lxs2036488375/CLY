<?php
//详情页管理
namespace Home\Controller;
use Think\Controller;
class DetailController extends Controller {
	/*载入详情页*/
	//1.加载该店的基本信息find(id)
	//2.遍历该店的所有菜单（按所属分类）
    public function index(){
		
    }
	
	/*评论展示*/
	//遍历所有评论、所有评分，计算平均评分及总评人数（评论没有回复）
	public function comment(){
		
	}
	
	//购物车(按店显示车内物品)
	public function cart(){
		
	}
	
	//商家介绍（资质信息）
	public function shopInfo(){
		
	}
}