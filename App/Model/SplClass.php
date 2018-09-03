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

class SplClass{

    #栈
    public function stack()
    {
        $stack = new \SplStack();
        return $stack;
    }

    #队列
    public function queue()
    {
        $queue = new \SplQueue();
        return $queue;

    }

    #堆
    public function heap()
    {
        $heap = new \SplMinHeap();
        return$heap;
    }

    #固定尺寸的数组
    public function fixArray($num = null)
    {
        $fixArray = new \SplFixedArray($num);
        return $fixArray;
    }



}

///////////////php spl四种常用的数据结构///////////////////////////////////
$SplClass = new SplClass();

$stack = $SplClass->stack();
$stack ->push('data1');
$stack ->push('data2');
$stack ->push('data3');

echo $stack ->pop();
echo $stack ->pop();
echo $stack ->pop();

$queue = $SplClass->queue();

$queue ->enqueue('queue1');
$queue ->enqueue('queue2');
$queue ->enqueue('queue3');

echo $queue ->dequeue();
echo $queue ->dequeue();
echo $queue ->dequeue();


$heap = $SplClass->heap();

$heap ->insert('heap1');
$heap ->insert('heap2');

echo $heap ->extract();
echo $heap ->extract();

$fixArray = $SplClass->fixArray($num=10);
$fixArray[0] = '123';
$fixArray[9] = '33';
var_dump($fixArray);


