<?php

class Triangle extends Polygon {

    public function setCoordinates(int $point1, int $point2, int $point3, int $point4, int $point5, int $point6)
    {
        $this->setPoints([$point1, $point2, $point3, $point4, $point5, $point6]);
    }
}
