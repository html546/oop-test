<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/9
 * Time: 10:00
 */

class MyClass{
    const constant = 'constant value';
    function showConstant(){
        echo self::constant . "\n";
    }
}

$c = new MyClass();
$c->showConstant();
//第一种在外部访问类常量的方法
echo $c::constant;
//第二种在外部访问类常量的方法
echo MyClass::constant;
