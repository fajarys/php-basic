<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "hai $finalName" . PHP_EOL;
}

sayHello("Fajar", function ($name) {
    return strtoupper($name);
});
sayHello("fajar", fn ($name) => strtoupper($name));
sayHello("Fajar", "strtoupper");
sayHello("Fajar", "strtolower");
