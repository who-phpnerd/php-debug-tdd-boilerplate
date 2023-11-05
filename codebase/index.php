<?php
require_once './vendor/autoload.php';

use PHPTdd\Animal\Dog;

$dog = new Dog();

print_r($dog->bark());
