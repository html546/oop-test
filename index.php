<?php

/**
 * 定义接口，相当于定义一个标准
 * Interface IUsb
 */
interface IUsb{
    public function write($msg);
    function read();
}

/**
 * Class Upan
 */
class Upan implements Iusb{

    public function write($msg)
    {
        echo "写入U盘$msg<br/>";
    }

    function read()
    {
        return "从U盘读取一段数据";
    }
}

/**
 * Class NeiCunKa
 */
class NeiCunKa implements IUsb{

    public function write($msg)
    {
        echo "写入到内存卡:$msg<br/>";
    }

    function read()
    {
        echo "从内存卡读取";
    }
}

$pan = new Upan();
//$pan->write("数据");

$n = new NeiCunKa();
/**
 * 直接使用IUsb类型作为参数，这样的话，只要实现了IUsb接口的类型,都可以传进去
 * @param IUsb $u
 */
function test(IUsb $u){
    $u->write('数据111');
}
//这里传内存卡
test($n);
//这里传U盘
test($pan);