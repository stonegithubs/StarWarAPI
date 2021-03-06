<?php
/**
 * 
 * @作者: Demoonwu 
 * @电子邮箱:(Demoonwu@foxmail.com)
 * @创建日期:2017-05-17 17:13:40
 * @版本: $Id$
 */
namespace app\api\validate;
use think\Validate;
use think\Request;
use think\Exception;
class BaseValidate extends Validate {
    // 获取http传入的参数
    // 对这些参数做校验
    public function gocheck(){
       $request=Request::instance();
       $params=$request->param();
       $result=$this->check($params);
       if(!$result){
       		$error=$this->error;
       		throw new Exception($error);
       }else{
       		return true;
       }
    }
}