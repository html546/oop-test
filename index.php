<?php
//就算使用命名空间，依然需要先引入php文件，否则找不到其中的类
spl_autoload_register(function($name){
    require_once "$name.php";
});

function test(){
    echo "test<br/>";
}

use App\Person;


$person = new Person();
$person->t();