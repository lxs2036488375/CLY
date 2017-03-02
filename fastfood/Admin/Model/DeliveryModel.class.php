<?php
//自定义的Model类实现数据的操作
namespace Admin\Model;
use Think\Model\RelationModel;
class DeliveryModel extends RelationModel {
	//自动完成
	protected $_auto = array(
		array('status','2'),  // 新增的时候把status字段设置为2
		array('pass','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
		array('addtime','time',1,'function'), // 对addtime字段在更新的时候写入当前时间戳
	);
}