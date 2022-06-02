<?php namespace Drawing;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class DrawingException extends \Exception
{
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}]


// Exception 1 wordt opgeworpen in setX
//opgevangen in constructor
//vanuit constructor werpen we en nieuwe exception op,
// maar de info over Exception 1 blijft behouden (komt in $previous)
