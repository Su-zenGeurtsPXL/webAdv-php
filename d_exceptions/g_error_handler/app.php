<?php
require 'src/autoload.php';
set_error_handler('errorHandler');
function errorHandler($errno, $errstr, $file, $line) {
    print("$errstr\n");
    exit();
}
error_reporting(E_ALL);
use Util\File;
print(File::readFile('ikbestaniet.txt'));
print('done');