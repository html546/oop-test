<?php
//就算使用命名空间，依然需要先引入php文件，否则找不到其中的类
spl_autoload_register(function($name){
    require_once "$name.php";
});

use App\Person;
//这个函数是全局命名空间中的函数
function test(){
    echo "test<br/>";
}

$person = new Person();
$person->t();