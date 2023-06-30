<?php
$gender = "PRIA";

$hi = NULL;

if ($gender == "PRIA") {
    echo $hi = "hei bro" . PHP_EOL;
} else {
    echo $hi = "hei nona" . PHP_EOL;
}
echo $hi . PHP_EOL;

//clean code
$hi = $gender == "PRIA" ? "hai bro" : "hai nona";
echo $hi . PHP_EOL;
