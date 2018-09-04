<?php

namespace app\model;

use think\Request;


/**
*  
*/
class GoodsModel
{
	//商品封面图添加
	public static function goods_img()
	{
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('image');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->validate(['size'=>204800,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
	    if($info){
	        // 成功上传后 获取上传信息
			$data['img_name'] = $info->getFilename();
	        $data['img_path'] = '/uploads/'.$info->getSaveName();
	        $data['created_at'] = time();
	        $id = db('public_images')->insertGetId($data);
	        return $id;
	    }else{
	        // 上传失败获取错误信息
	        return $file->getError();
	    }
	}
	//商品信息入库
	public static function goods_add()
	{
		$data = Request::instance()->except('goods_add_data');
		// $data['created_at'] = time();
		$id = db('goods')->insertGetId($data);
		return $id;
	}
	//商品数据列表-下架
	public static function goods_delete()
	{
		$id = request()->param('id');
		if(!empty($id))
		{
			$data = db('goods')->where('id','=',$id)->update(['status'=>0]);
			return $data;
		}else
		{
			return 4000;
		}
	}
	//下架商品-商品上架
	public static function goods_top()
	{
		$id = request()->param('id');
		if(!empty($id))
		{
			$data = db('goods')->where('id','=',$id)->update(['status'=>1]);
			return $data;
		}else
		{
			return 4000;
		}
	}
}


?>