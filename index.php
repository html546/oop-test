<?php
//就算使用命名空间，依然需要先引入php文件，否则找不到其中的类
require_once "App.php";
//引入命名空间中的类
use App\Person;

$person = new Person();
$person->Test();