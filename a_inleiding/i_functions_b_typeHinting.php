<?php
// PHP 5.6 (enkel voor array en objects)
function printDatum ( DateTime $date ) {
    print ($date->format('Y-m-d H:i:s')) ;
    echo "\n";
}
function printRij ( array $rij ){
    foreach ($rij as $element){
        print($element."\n");
        echo "\n";
    }
}
$date=new DateTime();
printDatum ( $date );
echo "\n";

$rij=[1,2,3];
printRij ( $rij );
echo "\n";


// PHP 7 (ook voor int, float, string, boolean)
// ook return-type
function som (int $getal1, int $getal2 ) : int {
    return $getal1 + $getal2;
}
$resultaat = som ( 1 , 2 );
print ( $resultaat );
