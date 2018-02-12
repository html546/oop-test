<?php

class Person{
    public $name;
    private $sex;
    public function __construct($name,$sex)
    {
        $this->name=$name;
        $this->sex=$sex;
    }

//    function show(){
//        echo "姓名:".$this->name." 性别:".$this->sex;
//    }

    /**
     * 方法用于一个类被当成字符串时应怎样回应。
     * 例如 echo $obj;应该显示些什么。
     * 此方法必须返回一个字符串，
     * 否则将发出一条E_RECOVERABLE_ERROR级别的致命错误
     * @return string
     */
    public function __toString()
   {
        return "姓名:".$this->name." 性别:".$this->sex;
   }
}

$person = new Person('张三','男');

echo $person;