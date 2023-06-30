<?php
$names = $arrayName = array('fajar', 'ganteng', 'banget');

for ($i = 0; $i < count($names); $i++) {
    echo "ini perulangan for biasa $i -  " . $names[$i] . PHP_EOL;
}
echo PHP_EOL;

foreach ($names as $index => $name) {
    echo "ini foreach $index :  " . $name . PHP_EOL;
}

echo PHP_EOL;
foreach ($names as $name) {
    echo "ini foreach :  " . $name . PHP_EOL;
}
echo PHP_EOL;

$person = [
    'first_name' => 'fajar',
    'midle_name' => 'sangat',
    'last_name' => 'ganteng'

];

foreach ($person as $key => $value) {
    echo $key . " => " . $value . PHP_EOL;
}
