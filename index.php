<?php
//就算使用命名空间，依然需要先引入php文件，否则找不到其中的类
spl_autoload_register(function($name){
    require_once "$name.php";
});
//一个use引入多个命名空间中的东西，用逗号隔开
use App\Person as Aperson,Bpp\Person as Bperson;

$person = new Aperson();
$person->Test();