<?php

namespace App\Model;

/**
 * php 魔术方法
 * php 魔术常量
 * author liutiecheng
 * date 2018.9.3
 */

class DataStructure
{
    const PRE = "<br>";
    protected $className;
    private $functionName;
    private $methodName;

    //构造方法实例化类的时候调用
    public function __construct()
    {
        //获取当前的类名
        echo self::PRE.__CLASS__;
        //获取当前的函数名称
        echo self::PRE.__FUNCTION__;
        //获取当前的类方法名称
        echo self::PRE.__METHOD__;
        //当前文件所在目录
        echo self::PRE.__DIR__;
        //当前文件完整目录以及文件名
        echo self::PRE.__FILE__;
        //当前命名空间
        echo self::PRE.__NAMESPACE__;

    }

    //魔术方法设置属性和属性值
    public function __set($var,$value)
    {
        $this->$var=$value;
    }

    //魔术方法获取属性的值
    public function __get($var)
    {
        echo self::PRE.$this->$var;
    }

    //判断属性是否存在, 外部访问不到才进入此函数
    public function __isset($var)
    {
        echo self::PRE;
        return isset($this->$var) ? true : false;
    }

    //外部不能删除才进入此方法
    public function __unset($val)
    {
        echo self::PRE."unset $val";
        unset($this->$val);
    }

    //当把类当函数调用
    public function __invoke($arg)
    {
        echo  self::PRE.$arg;
    }

    //当直接打印对象
    public function __toString()
    {
        return self::PRE."class can echo";
    }

    //当调用方法不存在
    public function __call($name,$value)
    {
        //var_dump($value);
        echo self::PRE."$name function is not exit !!";
    }

    public static function __callStatic($name,$value)
    {
        echo self::PRE."$name static function is not exit !!";

    }


}

$dataStructure = new DataStructure();

/////////魔术方法////////////////////////////////////////////////////////

$dataStructure -> className = '123';

$dataStructure -> className;

unset($dataStructure -> className);

var_dump(isset($dataStructure -> className));

$dataStructure('Invoke ....');

echo ($dataStructure);

$dataStructure -> aa();

DataStructure::aa();




