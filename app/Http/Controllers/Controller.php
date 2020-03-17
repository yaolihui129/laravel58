<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	/**
	 * App接口成功时的返回
	 * @param array $data
	 * @return string
	 */
	public function jsonSuccessData($data=[]){
	
	    return $this->jsonResponse(0, 'ok', $data);
	}
	
	/**
	 * APP接口异常时的返回
	 * @param unknown $code
	 * @param unknown $msg
	 * @param array $data
	 * @return string
	 */
	public function jsonData($code,$msg,$data=[]){
	    return $this->jsonResponse($code, $msg, $data);
	}
	
	/**
	 * 返回一个json
	 * @param unknown $code
	 * @param unknown $msg
	 * @param unknown $data
	 * @return string
	 */
	
	public function jsonResponse($code,$msg,$data){
	    $content = [
	        'code'  => $code,
	        'msg'   => $msg,
	        'data'  => $data
	    ];
	    return json_encode($content);
	}
}
