<?php

class Test{
    public $t = 0;
    function tt(){
        $this->t=100;
    }
}

$t1 = new Test();
$t1->tt();

$t2 = new Test();
$t2->tt();


