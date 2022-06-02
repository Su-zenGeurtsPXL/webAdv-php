<?php
if (!function_exists('classAutoloader')) {
    function classAutoLoader($className)
    {
        $fileName = 'src/' .
            str_replace('\\', '/', $className) .
            if (file_exists($fileName)) {
                require_once $fileName;
            }
    }
}
spl_autoload_register('classAutoLoader');
