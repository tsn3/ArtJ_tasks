<?php
spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('/', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
});
//
//function project_autoload($class)
//{
//  $baseDir = __DIR__ . '/tsn3/';
//  $relativeClass = substr($class, $lengPrefix);
//  $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
//  if (file_exists($file)) {
//    require $file;
//  }
//}