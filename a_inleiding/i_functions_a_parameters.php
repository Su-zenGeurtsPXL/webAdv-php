<?php
function som ( $getal1, $getal2 ) {
    return $getal1 + $getal2;
}
function printResultaat ( $resultaat ) {
    print ( $resultaat );
}
$resultaat = som ( 1 , 2 );
printResultaat ( $resultaat );
echo "\n";

// Verschillend # argumenten
// OPTIE 1: default waarde
function som2 ( $getal1, $getal2, $getal3 = 0 ) {
    return $getal1 + $getal2 + $getal3;
}

$resultaat = som2 ( 1 , 2 );
print ( $resultaat );
echo "\n";

$resultaat = som2 ( 1 , 2 , 3);
print ( $resultaat );
echo "\n";

// OPTIE 2: func_get_args
function som3 ( ) {
    $som=0;
    $argumenten = func_get_args();
    foreach ($argumenten as $argument) {
        $som += $argument;
    }
    return $som;
}
$resultaat = som3 ( 1 , 2 );
print ( $resultaat );
echo "\n";

$resultaat = som3 ( 1 , 2 , 3, 7, 9);
print ( $resultaat );
echo "\n";

// OPTIE 3: splat operator
function som4 ( ...$getallen ) {
    $som=0;
    foreach ( $getallen as $getal) {
        $som += $getal;
    }
    return $som;
}
$resultaat = som4 ( 1 , 2 );
print ( $resultaat );
$resultaat = som4 ( 1 , 2 , 3, 7, 9);
print ( $resultaat );