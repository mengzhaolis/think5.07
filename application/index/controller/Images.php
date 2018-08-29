<?php
namespace app\index\controller;

class Images
{
	//图片分类列表
    public function images()
    {
        return view('images/images_list');
    }
    //查看图片详情
    public function images_show()
    {
    	return view('images/images_show');
    }
    
}