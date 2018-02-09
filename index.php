<?php

class Foo{
    public static $my_static = "foo";
    public function staticValue(){
        return self::$my_static;
    }
}
//第一种访问静态变量的方式
echo Foo::$my_static."<br/>";
//第二种访问静态变量的方式,只在php5.3版本以上才能使用
$foo = new Foo();
echo $foo::$my_static."<br/>";
//修改类的静态变量
Foo::$my_static = "noxue";
//输出类的静态变量
echo $foo::$my_static;