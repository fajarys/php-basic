<?php
$data = [1, 2, 3, 4, 5];
$mapFunction = fn (int $value) => $value * 5;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);
rsort($data);
var_dump($data);

echo PHP_EOL;

var_dump(array_map(fn ($data) => $data * 2, $data));
echo PHP_EOL;
// var_dump(sort($data));
echo PHP_EOL;
var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    'id' => 'L',
    'name' => 'Fajar'
];

var_dump(array_keys($person));
var_dump(array_values($person));
