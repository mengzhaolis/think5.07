<?php

namespace app\index\controller;

use think\Request;
use app\model\GoodsModel;

/**
*  
*/
class Goods
{
	//商品添加模板展示
	public function goods_add()
	{
		return view('goods/goods_add');
	}
	//执行商品添加功能
	public function goodsAddData()
	{
		$data = GoodsModel::goods_add();
		return $data;
	}
	//商品封面图添加
	public function goodsImg()
	{
		$refule = GoodsModel::goods_img();
		return $refule;
	}
}


?>