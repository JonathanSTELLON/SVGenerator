<?php

class Rectangle extends Shape{

    // Définition de constantes de classes = valeurs identiques et immuables pour tous les objets de la classe
    const TAG = 'rect';

    // Déclaration des propriétés avec leur visibilité (public ou private)
    // Rem. : on peut typer les propriétés depuis PHP 8
    // Rem. : on peut donner des valeurs par défaut aux propriétés
    // Rem. : généralement les propriétés sont privées et on crée des méthodes pour y accéder : c'est l'encapsulation
    protected $width;
    protected $height;

    // Définition des méthodes de la classes = fonctions

    public function __construct(){
        //On initialise des valeurs par défaut à l'objet courant
        parent::__construct(); //pour éxécuter aussi le constructeur du parent Shape
        $this->width=100;
        $this->height=50;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setSize(int $width, int $height){
        $this->width=$width;
        $this->height=$height;
    }

    public function draw(){
        return genTag(self::TAG, [ //le mot clé self appelle le TAG de la classe en question
            'x'=>$this->location->getX(),
            'y'=>$this->location->getY(),
            'fill'=>$this->color,
            'opacity'=>$this->opacity,
            'width'=>$this->width,
            'height'=>$this->height
        ]); 
    }
}
