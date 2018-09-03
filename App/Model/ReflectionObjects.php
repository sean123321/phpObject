<?php
/**
 * Created by PhpStorm.
 * User: enran
 * Date: 2018/9/3
 * Time: 14:45
 * action php 反射
 * php spl 标准库基础练习
 * 数据结构
 */

namespace App\Model;

class ReflectionObjects
{

    private $name =array();
    private $action = array();
    private $ReflectionObject;
    private $reflectionObjects;
    const PRE = "<pre>";

    public function __construct()
    {
        #反射这个类实例化
        //return $this->ReflectionObject = new \ReflectionObject($this->reflectionObjects);

    }

    public function __set($var,$value)
    {
        $this->$var = $value;
    }

    public function __get($var){
        return $this ->$var;
    }

    public function Reflection()
    {
        return $this->ReflectionObject = new \ReflectionObject($this->reflectionObjects);
    }

    #查看反射类的属性
    public function getName()
    {
        foreach($this->ReflectionObject->getProperties() as $value){
             array_push($this->name,$value ->getName());
        }
        echo self::PRE;
        print_r($this ->name);
    }

    #查看反射的方法名称
    public function getAction(){
        foreach($this->ReflectionObject->getMethods() as $value){
             array_push($this->action,$value ->getName());
        }
        echo self::PRE;
        print_r($this->action);
    }
}

$refl = new ReflectionObjects();

$refl ->reflectionObjects = new \SplStack();

$refl ->Reflection()->getName();

$refl ->getAction();

//print_r(get_class_methods(new \SplStack()));
//print_r(get_class_vars('ReflectionObjects'));

