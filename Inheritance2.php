<?php
class Animal
{
protected $name;
public function __construct($name)
{
$this->name = $name;
}
}
class Dog extends Animal
{
public function bark()
{
echo "$this->name : Woof.. woof...";
}
}
$bobby = new Dog("Bobby");
$bobby->bark();