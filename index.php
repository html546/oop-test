<?php
//就算使用命名空间，依然需要先引入php文件，否则找不到其中的类
require_once "App.php";
require_once "Bpp.php";
//引入命名空间中的类,并取别名,别名防止冲突
use App\Person as Aperson;
use Bpp\Person as Bperson;

$person = new Aperson();
$person->Test();