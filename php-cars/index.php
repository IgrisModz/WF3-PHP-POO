<?php

/// Inclusion de la classe
require_once "classes/MyClass.php";

/// Création d'un objet
/// On utilise la classe (le modèle) pour créer un objet

/// Instance de l'objet
// $myObject = new MyClass;

/// Référence à une propriété de l'objet
// echo $myObject->myProperty;
// echo "<br>";

/// Référence à une méthode / action de l'objet
// echo $myObject->myMethod();
// echo "<br>";

/// Référence à une constante de la class
// echo MyClass::MY_CONSTANT;
// echo "<br>";

// Inclusion de la classe Car
require_once "classes/Car.php";

// Instance de l'objet depuis la classe Car
// Définition de propriété lors de l'instance de l'objet
$myFirstCar = new Car("Ford", "F-150", "noir");
$mySecondCar = new Car("Toyota", "Tacoma", "gris");

echo "Voiture 1 - Marque : {$myFirstCar->getBrand()}";
echo "<br>";
// unset($myObject);
echo "Voiture 1 - Mod&egrave;le : {$myFirstCar->getModel()}";
echo "<br>";
echo "Voiture 1 - Couleur : {$myFirstCar->getColor()}";
echo "<br>";
echo "Voiture 1 - Est d&eacute;marr&eacute; : ".($myFirstCar->getIsStarted() ? "Oui": "Non");
echo "<br>";


// Modification des propriétés
$mySecondCar->setColor("red");
// $mySecondCar->brand = "Fiat";


echo "Voiture 2 - Marque : {$mySecondCar->getBrand()}";
echo "<br>";
echo "Voiture 2 - Mod&egrave;le : {$mySecondCar->getModel()}";
echo "<br>";
echo "Voiture 2 - Couleur : {$mySecondCar->getColor()}";
echo "<br>";
echo "Voiture 2 - Est d&eacute;marr&eacute; : ".($mySecondCar->getIsStarted() ? "Oui": "Non");
echo "<br>";

$mySecondCar->start();

echo "Voiture 2 - Est d&eacute;marr&eacute; : ".($mySecondCar->getIsStarted() ? "Oui": "Non");
echo "<br>";

$mySecondCar->stop();

echo "Voiture 2 - Est d&eacute;marr&eacute; : ".($mySecondCar->getIsStarted() ? "Oui": "Non");
echo "<br>";


echo "<hr>";