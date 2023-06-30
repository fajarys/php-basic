<?php
function recursive($a)
{
    if ($a < 20) {
        echo "$a" . PHP_EOL;
        recursive($a + 1);
    }
}

echo recursive($a) . PHP_EOL;

function sumFunc(...$numbers): int
{
    $acc = 0;
    foreach (func_get_args() as $n) {
        $acc += $n;
    }
    return $acc;
}
echo sumFunc(1, 2, 3, 4) . PHP_EOL;

function sum(...$numbers): int
{
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}
echo sum(1, 2, 3, 4) . PHP_EOL;

function multiplication($num): int
{
    return $num * $num;
}
echo multiplication(4) . PHP_EOL;

function distribution($int): int
{
    return $int / $int;
}
echo distribution(20) . PHP_EOL;

function loop()
{
    $a = 1;
    while ($a <= 10) {
        echo "ini loop ke-" . $a . PHP_EOL;
        $a++;
    }
}
echo loop();
