<?php

function logInfo($class){
    $class->log("日志信息");
}

class Loger{
    function log($msg){
        echo $msg;
    }
}

$l = new Loger;
//第一种方法，不适用匿名类
//logInfo($l);
//第二种方法,创建匿名类.
logInfo(new class{
    function log($msg){
        echo $msg;
    }
});