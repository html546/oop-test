<?php

class Person{
    public $name = "张三";
    private $sex="男";
    protected $age = 123;
    public function __construct()
    {
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
    function Test(){
        echo "test";
    }

}


$person = new Person();
//遍历对象中的可见属性(也就是public权限的字段)
foreach ($person as $k=>$v){
    echo "$k ----- $v<br/>";
}