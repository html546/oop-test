<?php

trait LogTrait{
    private function log($msg){
        echo "log日志:$msg<br/>";
    }
}

class Test {
    use LogTrait{log as public;}
}

$t = new Test();
$t->log("日志信息");