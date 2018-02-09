<?php

class Test{
//   普通字段属于每个对象,每个对象的字段都是相互独立的
//    public $count = 0;

//静态变量只属于类本身，创建多少个对象都只有一个静态变量
    public static $count = 0;
    public function __construct()
    {
//        不能通过this来访问静态变量
        self::$count++;
    }
    public static function tt(){
        echo "tttttt<br/>";
//        this指向当前的对象
//        静态方法被调用的时候，静态方法不需要通过对象来调用，所以就没有this
//        静态方法不能调用非静态方法，以及不能使用非静态字段
//        $this->demo();//这句是错的
    }
    public function demo(){
        echo "demo<br/>";
        Test::tt();//非静态方法可以使用静态的方法和静态的字段
    }
}
//第一种调用静态方法的方式
Test::tt();
$tt = new Test();
//第二种调用静态方法的方式
$tt::tt();
for ($i=0;$i<10;$i++){
    $t = new Test();
    echo $t::$count."<br/>";
}

