<?php

class Animal
{
    public $weight = 40;
    public $height = 50;
    private $color = 'black';

    public function getcolor()
    {
        return $this->color;
    }

    public function move()
    {

        echo "Moving<br>";
        echo "color". $this->color;
    }
    
    public function eat()
    {
        echo "Eating";
    }
}

class Dog extends Animal
{

}

class Sparrow extends Animal
{
    function fly()
    {
        echo "fly like a bird";
    }
}
$sparro = new Sparrow;
$sparro->fly();

// $animal = new Animal();
// $animal->move();

$dog = new Dog();
// $dog->move();
echo $dog->getcolor();
?>