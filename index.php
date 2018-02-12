<?php

class Test{
    public function __call($name, $arguments)
    {
        echo $name;
        var_dump($arguments);
    }
}

$t = new Test();
$t->admin(1,2,3,'xxxx');