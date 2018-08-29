<?php
namespace app\index\controller;

class Order
{
	//支付成功订单
    public function order_ok()
    {
        return view('order/order_ok');
    }
    //未支付订单
    public function order_no()
    {
    	return view('order/order_no');
    }
    //发货订单
    public function go_order()
    {
    	return view('order/go_order');
    }
}