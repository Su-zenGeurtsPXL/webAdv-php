<?php

final class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function __toString()
    {
        return "($this->x, $this->y)";
    }

    // Afstand tussen 2 punten = ( (x2 - x1)^2 + (y2-y1)^2 )^(1/2)
    public function calculateDistance(Point $point)
    {
        return sqrt(pow(($this->x - $point->x), 2) + pow(($this->y - $point->y), 2));
    }
}