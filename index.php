<?php



function login($name,$pass){
    if(empty($name)){
        throw new Exception('user',1);
    }
    if(empty($pass)){
        throw new Exception('pass',2);
    }

    echo "登录成功";

}
try{
    login($_GET['name'],$_GET['pass']);
}catch (Exception $e){
    if($e->getCode()==1){
        echo "用户名不能为空";
    }elseif ($e->getCode()==2){
        echo "密码不能为空";
    }
}
