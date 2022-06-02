<?php

final class Point
{
    private $x, $y;
    private static $countInitialisations = 0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        self::$countInitialisations++;
    }

    function __destruct()
    {
        self::$countInitialisations--;
    }

    public static function getCountInitialisations()
    {
        return self::$countInitialisations;
    }
}