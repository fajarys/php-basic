<?php
$x = 10;
$y = $x++;

var_dump($x);
var_dump($y);
echo "\n";
$x = 10;
$y = ++$x;

$y = $x + 1;
$y = $x;

var_dump($y);
var_dump($x);
echo "\n";
// same konsept
$y = $x;
$y = $x + 1;

var_dump($y);
var_dump($x);
