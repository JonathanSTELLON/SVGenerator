<?php

class Autoloader{

    static public function register(){
        spl_autoload_register([__CLASS__,'autoload']);
        //On appelle la méthode statique autoload sur la classe Autoloader grace a la constante magique __CLASS__
    }

    static public function autoload(string $classname){
        require 'class/'.$classname.'.php';
    }

}