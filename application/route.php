<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

/**
 * 路由定义规则
 * Route::rule('路由表达式','路由地址(即模块名/控制器名/方法名)','路由参数(数组形式)','变量规则(数组)');
 * 
 */
//后台首页
Route::rule('hello','index/Index/index','GET|POST');
Route::rule('welcome','index/Index/welcome','*');
//商品管理
//商品添加
Route::rule('goods_add','index/Goods/goods_add','GET|POST');
Route::rule('goods_add_data','index/Goods/goodsAddData','GET|POST');
//商品封面图添加
Route::rule('goods_add_img','index/Goods/goodsImg','GET|POST');
//商品列表
Route::rule('goods_list','index/Goods/goods_list','GET|POST');
//商品数据列表删除
Route::rule('goods_delete','index/Goods/goods_delete','GET|POST');
//下架商品
Route::rule('goods_del','index/Goods/goods_del','GET|POST');
//下架商品-商品上架
Route::rule('goods_top','index/Goods/goods_top','GET|POST');
//图片管理
Route::rule('images','index/Images/images','GET|POST');
//查看图片
Route::rule('images_show','index/Images/images_show','GET|POST');
//订单管理-已支付订单
Route::rule('order_ok','index/Order/order_ok','GET|POST');
//订单管理-未支付订单
Route::rule('order_no','index/Order/order_no','GET|POST');
//订单管理-发货订单
Route::rule('go_order','index/Order/go_order','GET|POST');

//商品分类、
//增加分类
Route::rule('type_add','index/Type/type_add','GET|POST');
//分类数据展示
Route::rule('type_list','index/Type/type_list','GET|POST');
//分类数据一级类数据添加入库
Route::rule('type_one','index/Type/type_one','GET|POST');