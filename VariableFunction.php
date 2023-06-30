<?php
function foo()
{
    echo "foo" . PHP_EOL;
}

function bar()
{
    echo "bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

function simpleFunction(string $name): string
{
    return "$name ganteng" . PHP_EOL;
}
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("fajar", "simpleFunction");
sayHello("fajar", "strtoupper");
sayHello("fajar", "strtolower");
