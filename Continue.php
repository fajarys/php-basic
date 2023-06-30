<?php
$counter = 1;
for ($counter; $counter <= 100; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    }
    echo "ini for continue ke - " . $counter . PHP_EOL;
}
