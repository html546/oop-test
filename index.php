<?php

spl_autoload_register(function($name){
    require_once "$name.php";
});

/*$cat = new Cat();
$cat->run();*/

$person = new Person();
$person->run();
$person->pa();


