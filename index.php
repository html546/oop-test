<?php

//面向过程

//人的位置
$x = 0;
$y = 0;

//移动人到新的位置
function move($tx,$ty){
    global $x,$y;

    $x = $tx;
    $y = $ty;
}

echo "当前所在位置:x:$x,y:$y<br/>";

move(100,200);
echo "当前所在位置:x:$x,y:$y<br/>";