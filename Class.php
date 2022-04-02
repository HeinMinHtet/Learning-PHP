<?php
Class Animal{
    public $name;
    public $color;

    public function __construct()
    {
        echo " This is New Animal ";
    }
    public function run(){
        echo " $this->color $this->name is running...";
    }
}

$dog = new Animal;
$dog->name ="Bobby";
$dog->color="red";
$dog->run();

class Car{
    private $name;
    public function __construct($name)
    {
        $this->name =$name;
    }

    public function power(){
        echo "$this->name have 500 horse power";
    }
}
$car = new Car("Toyota");
$car->power();