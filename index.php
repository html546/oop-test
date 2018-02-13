<?php
//在命名空间外面写代码是错误的操作
//$b=2;  //错误
namespace Name1{
    class Person{

    }
}
//在命名空间外面写代码是错误的操作
//$a=1;  //错误
namespace Name2{
    class Person{

    }
}
//可以不给命名空间名字
namespace {
//    use name1\Person as p1,name2\Person as p2;
//    完全限定类名 = 当前命名空间 + 限定类名
      $p1 = new Name1\Person();
      $p2 = new Name2\Person();
}