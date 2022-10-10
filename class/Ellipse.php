<?php

class Ellipse extends Shape{

    const TAG = 'ellipse';

    protected $rx;
    protected $ry;

    public function __construct(){
        parent::__construct(); //pour éxécuter aussi le constructeur du parent Shape
        $this->rx=100;
        $this->ry=50;
    }

    public function setRadius(int $rx, int $ry){
        $this->rx=$rx;
        $this->ry=$ry;
    }

    public function draw(){
        return genTag(self::TAG, [
            'cx'=>$this->location->getX(),
            'cy'=>$this->location->getY(),
            'rx'=>$this->rx,
            'ry'=>$this->ry,
            'fill'=>$this->color,
            'opacity'=>$this->opacity
        ]);
    }
}