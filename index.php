<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/8
 * Time: 19:09
 */

class Person{
//    定义一个私有的age字段，私有的字段,只能在类里面被访问
    private $age = 20;
//    定义一个字段
    public $sex = "男";

    /**
     * 构造函数,在对象被创建的时候调用(都不需要程序员显示的调用)
     * Person constructor.
     * @param int $age
     */
    public function __construct($age=100)
    {
        $this->age = $age;
    }

    /**
     * 析构函数，在对象销毁的时候调用(都不需要程序员显示的调用)
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "我去厕所了";
    }

//定义一个方法
    function hello($name){
        echo $name.",你好";
    }

    /**
     * 一个私有的方法，只有类自身才能够调用
     */
    private function test(){
        echo "test";
    }
}

$person = new Person();

$person ->hello('老王');

//echo $person->age;

//$person ->test();