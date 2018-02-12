<?php

class Person{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }

    function show(){
        echo "姓名:".$this->name;
    }
}

/**
 * 类型约束的意义在于，只有参数类型与约束的类型一样的时候，才能调用成功
 * @param Person $person
 */
function test(Person $person){
    $person->show();
}

$person = new Person('张三');
test($person);
//此处传1进去，类型和Person类不一样，所以会报错
//test(1);