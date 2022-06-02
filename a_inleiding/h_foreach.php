<?php
$a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");
foreach ($a as $v) {
    echo "value: $v \n";
}

echo "\n";

$a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");
foreach ($a as $k=>$v) {
    echo "key: $k, value: $v \n";
}

