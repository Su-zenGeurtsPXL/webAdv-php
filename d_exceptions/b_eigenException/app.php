<?php
require_once 'src/autoload.php';

use Drawing\Point;
use Drawing\DrawingException;

try {
    $point=new Point(111, 1);
    print ("Voorbeeld 2 geslaagd");
} catch (Exception $exception) {
    print ($exception);
}