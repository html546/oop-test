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
}catch (OtherException $e){//多种异常可以在一个catch语句中处理,用|分隔
    echo $e->getMessage();
}catch (Exception $e){
    echo $e->getMessage();
}finally{
    echo "不管是否有异常，这里的代码总是会被执行";
}