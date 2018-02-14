<?php

class NameEmptyException extends Exception {

}

class PassEmptyException extends Exception {

}

function login($name,$pass){
    if(empty($name)){
        throw new NameEmptyException('用户名不能为空');
    }
    if(empty($pass)){
        throw new PassEmptyException('密码不能为空');
    }

    echo "登录成功";

}
try{
    login($_GET['name'],$_GET['pass']);
}catch (NameEmptyException $e){
    echo "用户名不能为空";
}catch (PassEmptyException $e){
    echo "密码不能为空";
}
