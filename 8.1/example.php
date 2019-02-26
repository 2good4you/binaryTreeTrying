<?php

spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/src/' . $className . '.php';
});

//$linkedList = new LinkedList(['1', '2', '3']);
$linkedList = new LinkedList();

for ($i = 0; $i < 20; $i++) {
    $linkedList->addIn($i);
}