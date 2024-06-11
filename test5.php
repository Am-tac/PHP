<?php
echo ucwords("using the abstract\n");
abstract class Animal
{
    abstract public function make_sound();
}

class Cat extends Animal
{
    public function make_sound()
    {
        echo ucwords("meow\n");
    }
}

class Dog extends Animal
{
    public function make_sound()
    {
        echo ucwords("bark\n");
    }
}

class Mouse extends Animal
{
    public function make_sound()
    {
        echo ucwords("squeak\n");
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = [$cat, $dog, $mouse];

foreach ($animals as $animal) {
    $animal->make_sound();
}
echo"\n";
echo ucwords("using the interface\n");

#interface

interface NameAnimal
{
    public function sounds();
}

class Cow implements NameAnimal
{
    public function sounds()
    {
        echo ucwords("moo\n");
    }
}

class Horse implements NameAnimal
{
    public function sounds()
    {
        echo ucwords("nicker\n");
    }
}

class Snake implements NameAnimal
{
    public function sounds()
    {
        echo ucwords("hiss\n");
    }
}

$cow = new Cow();
$horse = new Horse();
$snake = new snake();

$grup = [$cow, $horse, $snake];
foreach ($grup as $anima) {
    $anima->sounds();
}
