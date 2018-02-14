<?php

function login($name,$pass){
    if(empty($name)){
        throw new Exception('用户名不能为空');
    }
    if(empty($pass)){
        throw new Exception('密码不能为空');
    }

    echo "登录成功";

}
try{
    login($_GET['name'],$_GET['pass']);
}catch (Exception $e){
    echo $e->getMessage();
}
