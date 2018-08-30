<?php
/**
*action 单一入口自己加载类文件
*author liutiecheng
*date 2018.8.29
*email 794227312@qq.com
*/

header("content-type:text/html;charset=utf8");

define("BASEDIR", __DIR__);

include BASEDIR.'/Common/Loader.php';

//自动加载类的常用方法
#调用非静态的写法 spl_autoload_register(array(new Common\Loader(),'autoload'));
#spl_autoload_register('Common\Loader::autoload');

//自动加载类的方法旧函数被废弃即将
#function __autoload($className)
#{
#	include "$className.php";
#} 
#new App\Controller\Home\Index();
#new App\Model\Index();

//命名空间调用累其一方法
#Common\Loader()::autoload(1)

//命名空间调用累的其二方法加use
#use Common\Loader as Load;
#Load::autoload();

//调用命名空间的方法
#Common\autoload();

//调用命名空间的常量
#Common\TEST;


?>