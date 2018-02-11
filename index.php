<?php

/**
 * 只能继承一个类，但是可以实现多个接口
 * 定义接口，相当于定义一个标准
 * 接口中的方法必须是public的
 * 用implements 来实现一个接口，如果有多个接口，用逗号分隔开
 * 接口可以继承另一个接口，用extends来继承一个接口
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