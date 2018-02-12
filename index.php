<?php

trait LogTrait{
    public function log($msg){
        echo "log日志:$msg<br/>";
    }
}
trait Log1Trait{
    public function log($msg){
        echo "log1日志:$msg<br/>";
    }
}



class Test {
    use LogTrait,Log1Trait{
        LogTrait::log insteadof Log1Trait;
    }
}

$t = new Test();
$t->log("日志信息");