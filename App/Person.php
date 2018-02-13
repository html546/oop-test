<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/13
 * Time: 11:22
 */
//定义命名空间
namespace App;

function test(){
    echo "app-test<br/>";
}

class Person{
    function t(){
//        用namespace关键字访问当前命名空间下的函数
        namespace\test();
    }
}