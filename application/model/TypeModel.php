<?php

namespace app\model;

use think\Request;


/**
*  
*/
class TypeModel
{
    //添加一级类、下级类数据
    public static function type_one()
    {
        $data = request()->except('type_one');
        $id= db('type')->insertGetId($data);
        return $id;
    }
    public static function digui($data,$pid,$rank)
    {
        // var_dump($data);die;
        $tree = Array();
        foreach($data as $key=>$value)
        {
            if($value['pid']==$pid)
            {
                $value['rank']=$rank;
                // $flg = str_repeat('|__',$value['rank']);
                $value['type_name']=$value['type_name'];
                $tree[$key]=$value;
                $tree[$key]['son'] = self::digui($data,$value['id'],$rank+1);
            }

        }
        return $tree;
    }
}