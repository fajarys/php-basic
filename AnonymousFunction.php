<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("fajar");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}
sayGoodBye("fajar", function (string $name): string {
    return strtolower($name) . PHP_EOL;
});

$firstName = "fajar";
$lastName = "ganteng";

$sayHello = function () use ($firstName, $lastName) {
    echo "hai $firstName $lastName" . PHP_EOL;
};
$sayHello();
