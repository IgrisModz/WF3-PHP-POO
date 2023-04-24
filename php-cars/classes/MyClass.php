<?php

// Déclaration de la classe
// La classe est comme un modèle
class MyClass
{
    // CONSTANTES
    // --

    // Constante dans une classe
    const MY_CONSTANT = "this is a constant";

    // PROPERTIES
    // --

    // Variable dans une classe
    // s'appelle une "propriété"
    public $myProperty = "This is a property";



    // METHODS
    // --

    // Le constructor sera déclenché lors de l'instance de la class (création de l'objet)
    public function __construct()
    {
        echo "I am the constructor of MyClass<br>";
    }

    // Le destructor sera déclenché lors de la déstruction de l'objet
    public function __destruct()
    {
        echo "I am the destructor of MyClass<br>";
    }

    // fonction dans une classe
    // s'appelle une "méthode"
    public function myMethod()
    {
        return "This is a function";
    }
}