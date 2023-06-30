<?php
$first = [
    'first_name' => 'Fajar'
];
$second = array(
    'last_name' => 'Yuliawan'
);

$full = $first + $second;
var_dump($full);

echo "\n";

var_dump($first + $second);
echo "\n";
var_dump($first != $second);

$a = [
    'first_name' => 'fajar',
    'last_name' => 'ganteng'
];

$b = [
    'last_name' => 'ganteng',
    'first_name' => 'fajar'
];

var_dump($a == $b);
var_dump($a === $b);
// $full = $a == $b;
// var_dump($full);

function getValue()
{
    return [
        'name' => 'fajar',
        'age' => 20
    ];
}

$value = getValue();

var_dump($value);

$date = new DateTime('Asia/Jakarta');

var_dump($date);

function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

$result = runApp('name');

var_dump($result);
