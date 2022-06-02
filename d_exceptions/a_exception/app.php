<?php
require_once 'src/autoload.php';

use Util\Math;

try {
    $sum = Math::sum(1, 2, 3);
    print($sum);
} catch (Exception $exception) {
    print ($exception->getMessage());
}