<?php

trait LogTrait{
    public function log($msg){
        echo $this->name."的日志:$msg<br/>";
    }
}

class Test1{
    public $name = "test1";
    use LogTrait;
}

class Test2{
    public $name = "test2";
    use LogTrait;
}

class Test3{
    public $name = "test3";
    use LogTrait;
}

$test1 = new Test1();
$test1->log('日志信息');

$test2 = new Test2();
$test2->log('日志信息');

$test3 = new Test3();
$test3->log('日志信息');