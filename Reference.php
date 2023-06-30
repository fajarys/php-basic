<?php
$name = "fajar";

$otherName = &$name;
$otherName = "Ganteng";

echo $name . PHP_EOL;

function increment(int $value)
{
    $value++;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

function &getValue()
{
    static $value = 10;
    return $value;
}

$a = &getValue();
$a = 20;

$b = &getValue();
echo $b . PHP_EOL;
