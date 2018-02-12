<?php

class Animal{
    final public function run(){
        echo "Animal run<br/>";
    }
    public function eat(){
        echo "Animal eat<br/>";
    }
}

class Person extends Animal{
    public function eat()
    {
        echo "person eat<br/>";
    }

    /**
     * 以下是错误写法，因为final修饰的方法不能被子类覆盖
     */
//    public function run(){
//        echo "person run<br/>";
//    }
}


