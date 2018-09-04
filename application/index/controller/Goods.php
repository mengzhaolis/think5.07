<?php

namespace app\index\controller;

use think\Request;
use app\model\GoodsModel;
use app\model\TypeModel;
use think\Db;

/**
*  
*/
class Goods
{
	//商品添加模板展示
	public function goods_add()
	{
		$data = db('type')->select();
        $data = TypeModel::digui($data,0,0);
		return view('goods/goods_add',['data'=>$data]);
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
	//商品列表展示
	public function goods_list()
	{

		$data = DB::table('x_goods')->alias('g')->join('x_public_images i','g.face_img=i.id','left')->where('x_goods.status','=',1)->order('created_time desc')->field('x_goods.id,goods_name,show_jia,shi_jia,cheng_jia,xiao_jia,goods_kucun,img_path,created_time,status')->select();
		// var_dump($data);die;
		return view('goods/goods_list',['data'=>$data]);
	}
	//列表数据操作
	public function goods_delete()
	{
		$id = GoodsModel::goods_delete();
		return $id;
	}
	//下架商品
	public function goods_del()
	{
		$data = DB::table('x_goods')->alias('g')->join('x_public_images i','g.face_img=i.id','left')->where('x_goods.status','=',0)->order('created_time desc')->field('x_goods.id,goods_name,show_jia,shi_jia,cheng_jia,xiao_jia,goods_kucun,img_path,created_time,status')->select();
		// var_dump($data);die;
		return view('goods/goods_del',['data'=>$data]);
	}
	//下架商品-商品上架
	public function goods_top()
	{
		$id = GoodsModel::goods_top();
		return $id;
	}
}


?>