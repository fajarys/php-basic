<?php
$name = "Fajar Ganteng";

echo "Name: " . $name . PHP_EOL;
echo "Value: " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

// jika salah maka akan berubah menjadi 0
$valueInt = (int)"200";
var_dump($valueInt);

// jika salah maka akan berubah menjadi 0
$valueFloat = (float)"200.90";
var_dump($valueFloat);

$name = "fajar";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;


//variable parsing
echo "Hai $name, Lu ganteng" . PHP_EOL;
$var = "var";
echo  "this is {$var}s" . PHP_EOL;
