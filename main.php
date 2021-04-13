<?php
require_once __DIR__ . '/vendor/autoload.php';

$verySimpleClassInstance = new \JohnK\VerySimpleClass;
$verySimpleClassInstance->setName( 'John' );
echo $verySimpleClassInstance->getName();