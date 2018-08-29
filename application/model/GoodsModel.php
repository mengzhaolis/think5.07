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
	        $data['img_path'] = $info->getSaveName();
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
		$data = Request::instance()->param();
		$id = db('goods')->insertGetId();
		return $data;
	}
}


?>