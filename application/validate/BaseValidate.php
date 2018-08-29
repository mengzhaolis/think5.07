<?php 

namespace app\validate;

use think\Validate;
use think\Request;
use think\Exception;

/**
* basevalidate 	继承于validate类作为其他验证层的基类
*/
class BaseValidate extends Validate
{
	//接收需要校验的参数
	public function goCheck()
	{
		$request = Request::instance();
		$params = $request->param();
		$result = $this->check($params);
		if(!$result)
		{
			$error = $this->error;
			throw new Exception($error); 
		}else
		{
			return true;
		}
	}
	
}