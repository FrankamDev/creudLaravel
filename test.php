<?php

require __DIR__ . '/vendor/autoload.php';

$classes = get_declared_classes();

foreach ($classes as $class) {
    if (str_contains($class, 'Controller')) {
        echo $class . PHP_EOL;
    }
}
