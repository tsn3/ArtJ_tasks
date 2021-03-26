<?php

function project_autoload($class)
{
  $baseDir = __DIR__ . '/tsn3/';
  $relativeClass = substr($class, $lengPrefix);
  $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
  if (file_exists($file)) {
    require $file;
  }
}