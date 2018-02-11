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
 * 可以通过extends继承其他接口
 * Interface IExt
 */
interface IExt extends IUsb {
    function other();
}

class Test implements IExt{

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