<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/11
 * Time: 9:06
 */

/**
 * 如果子类没有定义构造函数，那么他会有一个默认的构造函数，并自动调用父类的构造函数.
 * 子类函数覆盖父类函数，函数名字和参数个数必须一样,参数名字则无关紧要.
 * Class Person
 */
class Person extends Animal {
    public function run()
    {
        echo "直立行走<br/>";
    }
    public function pa(){
        $this->run();
        echo $this->hp;
    }
}