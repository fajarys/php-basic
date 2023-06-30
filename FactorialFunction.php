<?php
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

function looping(int $value)
{
    $a = 0;
    while ($a <= $value) {
        echo "ini while ke - $a" . PHP_EOL;
        $a++;
    }
}
var_dump(looping(5));

var_dump(factorialLoop(5));

echo PHP_EOL;
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(5));

echo PHP_EOL;
function loop(int $value)
{
    if ($value == 0) {
        echo "end loop" . PHP_EOL;
    } else {
        echo "ini loop ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(10);
