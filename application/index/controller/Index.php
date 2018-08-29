<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return view('index/index');
    }
    public function welcome()
    {
        return view('index/welcome');
    }
}
