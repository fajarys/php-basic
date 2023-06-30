<?php
$name = "fajar"; // global scope


function sayHai()
{
    global $name;

    echo $name . PHP_EOL;
}
echo sayHai();
// var_dump($GLOBALS);

$names = "fayusa";
function sayName()
{
    echo "halo {$GLOBALS['names']}";
}
echo sayName();
