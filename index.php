<?php

abstract class Animal{
//    抽象方法，必须在子类被实现
    abstract function eat($something);
//一般的方法，可以直接在抽象类里面实现，跟一般的类中的方法一样.
    function run(){
        echo "行走<br/>";
    }
}

abstract class Monkey extends Animal{
    abstract function speak($words);
}

/**
 * 继承抽象类，实现抽象方法的快捷键,alt+enter
 * 1.抽象类不能被直接实例化(用来创建对象)
 * 2.抽象类中的抽象方法必须在子类中实现
 * Class Cat
 */
class Person extends Monkey {

    function eat($something)
    {
        echo "吃$something<br/>";
    }

    function speak($words)
    {
        echo "说:$words";
    }
}

$person = new Person();
$person->speak("hello world");

