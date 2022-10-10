<?php

class Square extends Rectangle {

    public function setSize(int $size, $useless=null){ //le 2e parametre est facultatif
        $this->width=$size;
        $this->height=$size;
    }
}