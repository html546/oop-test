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

/**
 * @param $msg
 */
function strlen($msg){
    echo $msg;
}

class Person{
    function t(){
//        反斜杠表示 使用全局命名空间中的test函数
//        如果该命名空间没有test，则默认会调用全局函数
//        也就是说，本命名空间的函数会覆盖全局命名空间的函数
        \test();
//        这里是调用本命名空间的test
        test();
//        这个是本命名空间的strlen
        strlen("admin");
//        这个是全局命名空间的strlen
        echo \strlen('admin');
    }
}