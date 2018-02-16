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
    public $people;
    public function __construct()
    {
        //默认没有一个人
        $this->people = [];
    }

    /**
     * 添加一个人到地图中
     * @param Person $p
     */
    function add(Person $p){
        $this->people[] = $p;
    }

    public function __toString()
    {
        $str = "当前人物所有信息<br/>";
//        遍历所有人的信息，拼接起来返回
        foreach ($this->people as $person){
            $str.=$person;
        }
        return $str;
    }
    function move(){
        /*for ($i = 0;$i<count($this->people);$i++){
            $this->people[$i]->point->x += 10;
            $this->people[$i]->point->y += 20;
        }*/
//        如果是对象，那么可以通过临时变量修改他其中的属性值
        foreach ($this->people as $person){
            $person->point->x += 10;
            $person->point->y += 20;
        }
    }
}

class Person{
    public $name;
    public $point;

//    人物初始位置
    public function __construct($name,Point $point)
    {
        $this->name = $name;
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

$map = new Map();
echo $map;
$map->add(new Person('无极剑圣',new Point(10,20)));
$map->add(new Person('盖伦',new Point(50,20)));
$map->add(new Person('王昭君',new Point(150,200)));
echo $map;
//移动所有角色，并输出所有角色的位置信息
$map->move();
echo $map;

$map->move();
echo $map;

/*
1.名词(对象);
2.对象具备哪些属性(字段)和功能(方法)
3,对象与对象之间的关系
*/