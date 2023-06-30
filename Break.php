<?php
$counter = 1;

while (true) {
    echo "Ini while break ke - " . $counter . PHP_EOL;
    $counter++;
    if ($counter > 5) {
        break;
    }
}
