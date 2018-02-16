<?php

//这个类用来表示一个点
class Point{
    public $x;
    public $y;

    public function __construct($x=0,$y=0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Map{
    public $poits;
}

class Person{
    public $point;

//    人物初始位置
    public function __construct(Point $point)
    {
        $this->point=$point;
    }

    /**
     * 人物移动到某个点
     * @param Point $point
     */
    function move(Point $point){
        $this->point = $point;
    }
    public function __toString()
    {
        return "x:".$this->point->x." y:".$this->point->y."<br/>";
    }
}
//初始化人的位置
$start = new Point();
$person = new  Person($start);

echo "当前人的位置: ".$person;
//移动人到新的位置
$end = new Point(100,200);
$person->move($end);
echo "当前人的位置 :".$person;