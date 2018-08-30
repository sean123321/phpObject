<?php
/**
* action  自动加载类
* @author liutiecheng
* email 794227312@qq.com
* date  2018.8.28
*/
namespace Common;

class Loader
{ 
	public static  function autoload($className)
	{
		include BASEDIR.'/'.str_replace('\\','/' ,$className).'.php';
	}
	
	
}

?>