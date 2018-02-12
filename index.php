<?php

final class Animal{
//    如果类前面加了final，则里面的方法，加不加final都无所谓
//因为已经不能被继承了，所以肯定也不能被覆盖了.
    final public function run(){
        echo "Animal run<br/>";
    }
    public function eat(){
        echo "Animal eat<br/>";
    }
}
//以下是错误写法,因为Animal类用final修饰后就不能被继承
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


