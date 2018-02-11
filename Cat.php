<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/10
 * Time: 21:23
 */

/**
 * 通过关键字extends 继承Animal类
 *
 * public 和 protected的东西可以被继承，private的不能被继承
 * Class Cat
 */
class Cat extends Animal{
    public function test(){
        echo $this->d;
    }
    public function __construct()
    {
        parent::__construct();
        echo "小猫咪被创造<br/>";
    }
}