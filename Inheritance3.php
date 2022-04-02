<?php
class Animal
{
static function info()
{
echo "Animal Class";
}
}
class Dog extends Animal
{
//
}
class Fox extends Dog
{
//
}
Fox::info();