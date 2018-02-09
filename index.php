<?php


/**
 * 自动加载器
 */

//注册自动加载器
spl_autoload_register(function($name){
//    echo "--".$name."--";
    require_once "./lib/$name.php";
});

$ani = new Animal();
$cat = new Cat();