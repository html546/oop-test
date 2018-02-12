<?php

trait LogTrait{
    public function log($msg){
        echo "日志:$msg<br/>";
    }
}

class Test1{
    function log($msg){
        echo "父类(基类)的log方法被调用<br/>";
    }
}

class Test2 extends Test1{
    use LogTrait;
}

$t = new Test2();
$t->log("日志信息");