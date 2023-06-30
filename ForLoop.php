<?php
// Perulangan Dengan Kondisi
$counter = 1;

for (; $counter <= 10;) {
    echo "halo dari loop kondisi - " . $counter . PHP_EOL;
    $counter++;
}
echo PHP_EOL;

//Perulangan Dengan Init Statement
for ($counter = 1; $counter <= 10;) {
    echo "halo dari loop init- $counter" . PHP_EOL;
    $counter++;
}
echo PHP_EOL;
// Perulangan Dengan Post Statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "halo dari loop post - " . $counter . PHP_EOL;
}
// minus
for ($counter = 10; $counter >= 1; $counter--) {
    echo "halo dari loop post - " . $counter . PHP_EOL;
}
