<?php
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';


// Animal
$hewan = new Animal("Chiko", "Animal");
echo $hewan->getInfo() . "\n";
echo "<br>";

//  Cat
$kucing = new Cat("Muezza");
echo $kucing->getInfo() . "\n";
echo "<br>";


//  Dog
$anjing = new Dog("Nozy");
echo $anjing->getInfo() . "\n";
echo "<br>";



?>