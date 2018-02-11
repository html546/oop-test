<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/10
 * Time: 21:22
 */

class Animal{
    public $hp;
    private $t;
    protected $d='ddd';
    public function __construct()
    {
        echo "小动物被创造<br/>";
    }

    public function run(){
        echo "行走";
    }
}