<?php

spl_autoload_register(function($name){
    require_once "$name.php";
});
//完全限定类名 = 当前命名空间 + 限定类名
// A\B\B       = A\B          +B
//完全限定类名:相当于文件的绝对路径
//当前命名空间:相当于文件所在文件夹路径
//限定类名:相当于文件名
$b = new A\B\B();