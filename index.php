<?php

// include 'src/MyClass1.php';

require __DIR__ . '/vendor/autoload.php';

$obj = new \Jihoon\User\MyClass1();
// $obj = new MyClass1();
// var_dump($obj);
// $obj2 = new Jihoon\Settings\MyClass2();


use \Jihoon\Review;
$review = new Review();
var_dump($review);