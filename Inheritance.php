<?php
class Animal
{
private $name;
public function __construct($name)
{
$this->name = $name;
}
public function run()
{
echo "$this->name is running...";
}
}
class Dog extends Animal
{
public function bark()
{
echo "Woof.. woof...";
}
}
$bobby = new Dog("Bobby");
$bobby->run(); // Bobby is running...
$bobby->bark();