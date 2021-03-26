<?php

include_once  'Logger.php';
include_once 'ClassLoader.php';

spl_autoload_register('project_autoload');
use Shape\Rectangle;
use Shape\Triangle;
use Shape\Circle;

echo "Периметр и площадь заданных фигур:" . PHP_EOL;
try {
    $circ = new Circle(0);
    echo "Диаметр заданного круга = " . $circ->diameter() . PHP_EOL;
    echo "Периметр круга = " . $circ->perimetr() . PHP_EOL;
    echo "Площадь круга = " . $circ->square() . PHP_EOL;
} catch (Exception $e) {
    Logger::error( $e->getMessage());
}

try {
    $triag = new Triangle(9, 6, 6, 5);
    echo "Периметр треугольника = " . $triag->perimetr() . PHP_EOL;
    echo "Площадь треугольника = " . $triag->square() . PHP_EOL;
} catch (Exception $e) {
    Logger::error( $e->getMessage());
}

try {
    $rect = new Rectangle(3, 6);
    echo "Периметр прямоугольника = " . $rect->perimetr() . PHP_EOL;
    echo "Площадь прямоугольника = " . $rect->square() . PHP_EOL;
} catch (Exception $e) {
    Logger::info( $e->getMessage());
}

