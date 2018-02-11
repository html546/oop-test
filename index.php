<?php

/**
 * 定义接口，相当于定义一个标准
 * 接口中的方法必须是public的
 * Interface IUsb
 */
interface IUsb{
    public function write($msg);
    function read();
}

/**
 * Interface IExt
 */
interface IExt{
    function other();
}

/**
 * 实现多个接口，用逗号分隔开
 * 同样要实现多个接口中所有的方法
 * Class Test
 */
class Test implements IUsb,IExt{

    public function write($msg)
    {
        // TODO: Implement write() method.
    }

    function read()
    {
        // TODO: Implement read() method.
    }

    function other()
    {
        // TODO: Implement other() method.
    }
}