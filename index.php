<?php
//继承一个Exception来自定义一个异常类
class OtherException extends Exception{

}


function test(){
//    用throw 关键字抛出一个异常对象
    throw new OtherException('这里发生了异常');
}

try{
    test();
}catch (OtherException $e){//自定义的Exception放在前面捕获
    echo "OtherException:".$e->getMessage();
}catch (Exception $e){
    echo "Exception:".$e->getMessage();
}