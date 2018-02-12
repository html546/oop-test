<?php

class Test{
    public function __call($name, $arguments)
    {
        echo "$name 页面不存在";
    }
    function index(){
        echo "index<br/>";
    }
    function show(){
        echo "show<br/>";
    }
}

$t = new Test();
$t->index();
$t->show();
$t->shoq();