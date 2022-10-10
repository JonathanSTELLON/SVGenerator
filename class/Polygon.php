<?php

class Polygon extends Shape {

    const TAG = 'polygon';

    private $points;

    public function __construct(){
        parent::__construct(); //pour éxécuter aussi le constructeur du parent Shape
        $this->points=[];
    }

    public function getPoints(){
        return $this->points;
    }

    public function setPoints(array $points){
        $this->points=$points;
    }

    public function draw(){
        return genTag(self::TAG, [
            'points' => implode(' ', $this->points),
            'fill' => $this->color,
            'opacity' => $this->opacity
        ]);
    }

}