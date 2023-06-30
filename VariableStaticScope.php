<?php
function increment()
{
    static $increment = 1; // static scope
    echo "increment : $increment" . PHP_EOL;
    $increment++;
}

increment();
increment();
increment();
