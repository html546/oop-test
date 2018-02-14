<?php

try{
    $dns = "mysql:host=localhost;dbname=qy";
    $db = new PDO($dns,'root','root');
    $db->exec("set names utf8");
}catch (Exception $e){
    echo $e->getMessage();
}finally{

}
