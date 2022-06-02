<?php
$a = array ( 1, 2, 3, 4 ); //size = 4
$b = array ( 1, 2.1, true, "ja" ); //size = 2
$c = array ( 1 => 12, "Juist" => true ); //size = 2
$d = array ( 2 => 1, 10 ); //size = 2

$a = array(1, 2, 3, 4);
echo "$a[0]\n";
$a[0] = "ja";
echo "$a[0]\n";
$b = array ( "een" => 1, "twee" => 3 );
echo $b["een"] . "\n";
echo "$b[een]\n";

$a = array(1, 2, 3, 4);
$a[4] = 5;
echo "$a[4]\n";
$a[] = 6; // eerste vrije int key
echo "$a[5]";
