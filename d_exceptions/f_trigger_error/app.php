<?php
require_once 'src/autoload.php';
error_reporting(E_ALL);
use Util\File;

print(File::readFile('ikbestaniet.txt'));
print ('done');