<?php
function hallo($name)
{
    echo "halo $name" . PHP_EOL;
}
hallo("fajar");
hallo("ganteng");

echo PHP_EOL;

function sayHello($name = "Anonimus")
{
    echo "hello $name" . PHP_EOL;
}
sayHello();
sayHello('fajar');

echo PHP_EOL;

function hai($firstName, $lastName = "anonymus")
{
    echo "hai $firstName ,$lastName" . PHP_EOL;
}
hai("fajar");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "hasil dari $first + $last = $total" . PHP_EOL;
}

sum("10", "10");
sum(15, 15);
sum(true, false);
// not working
// sum([],[]);

$values = [10, 20, 30, 40];
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode("+", $values) . "=" . $total . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...$values);
