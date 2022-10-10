<?php

require 'vendor/autoload.php';
require 'functions.php';

//Permet de se passer de tous les require des fichiers de classe
require 'class/Autoloader.php';
Autoloader::register();
//On appele directement register() sur la classe grace aux méthodes statiques

$rect = new Rectangle();
//$rect->x=100; //SI LA PROPRIETE EST PUBLIQUE
$rect->setLocation(150, 100);
$rect->setColor('cadetblue', 0.8);
$rect->setSize(50, 120);
//dump($rect);

$bigRect = new Rectangle();
$bigRect->setLocation(300, 200);
$bigRect->setColor('green', 0.7);
$bigRect->setSize(100, 220);

$circle = new Circle();
$circle->setLocation(140, 210);
$circle->setRadius(100);
$circle->setColor('goldenrod', 0.5);

$square = new Square();
$square->setLocation(400, 90);
$square->setColor('pink', 1);
$square->setSize(130);

$ellipse = new Ellipse();
$ellipse->setLocation(400, 310);
$ellipse->setRadius(90, 130);
$ellipse->setColor('purple', 0.8);

$triangle = new Triangle();
$triangle->setCoordinates(60, 200, 650, 60, 400, 90);
$triangle->setColor('brown', 0.9);

$polygon = new Polygon();
$polygon->setPoints([350, 80, 580, 100, 700, 320, 890, 600, 250, 70]);
$polygon->setColor('orangered', 0.4);

$svg = '';
$shapes = [];
$shapes[] = $rect;
$shapes[] = $bigRect;
$shapes[] = $circle;
$shapes[] = $square;
$shapes[] = $ellipse;
$shapes[] = $triangle;
$shapes[] = $polygon;

foreach ($shapes as $shape){
    $svg .= $shape->draw();
}

// $svg = $rect->draw();
// $svg .= $bigRect->draw();
// $svg .= $circle->draw();
// $svg .= $square->draw();
// $svg .= $ellipse->draw();
// $svg .= $triangle->draw();
// $svg .= $polygon->draw();

// Inclusion du template
include 'index.phtml';