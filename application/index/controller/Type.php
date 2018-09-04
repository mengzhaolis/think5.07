<?php

namespace app\index\controller;

use think\Request;
use app\model\TypeModel;
use think\Db;

class Type
{
    //分类列表
    public function type_list()
    {
        $data = db('type')->select();
        $data = TypeModel::digui($data,0,0);
        return view('type/type_list',['data'=>$data]);
    }
    //添加分类
    public function type_add()
    {
        $data = db('type')->select();
        $data = TypeModel::digui($data,0,0);
        return view('type/type_add',['data'=>$data]);
    }
    //添加一级分类
    public function type_one()
    {
        $id = TypeModel::type_one();
        return $id;
    }
}