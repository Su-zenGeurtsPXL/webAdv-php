<?php
$a = "";
print ("\$a is van het type " . gettype($a));
var_dump($a);
$b = (boolean)$a;
if ($b) {
    print ("\nwaar\n");
} else {
    print ("\nniet waar\n");
}
print ("\$b is van het type " . gettype($b));
var_dump($b);
