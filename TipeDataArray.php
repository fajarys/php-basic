<?php
$values = array("indexs" => 1, 2, 3, 4);
var_dump($values);

$arrayName = array(
    'values' =>
    [
        1,
        2,
        3.5,
        4
    ],
    'second' =>
    [
        'id' => 'ada',
        'name' => 'rizky',
        'age' => 13
    ]
);
var_dump($arrayName);
var_dump($arrayName['values'][1]);
var_dump($arrayName['second']['id']);

$arrayName = [
    'values' =>
    [
        1,
        2,
        3.5,
        4
    ],
    'second' =>
    [
        'id' => 'ada',
        'name' => 'rizky',
        'age' => 13
    ]
];
var_dump($arrayName);
var_dump($arrayName['values'][1]);
var_dump($arrayName['second']['name']);

$names = ["Fajar", "Yuliawan", "Ganteng"];
var_dump($names);

// Mengakses data di array pada nomor index
var_dump($names[0]);

// Mengubah data di array pada nomor index dengan value baru
$names[0] = "Rizky";
var_dump($names[0]);

// Menghapus data di array, index otomatis hilang dari array
unset($names[1]);
var_dump($names);

// Menambah data di array pada posisi paling belakang
$names[] = "Ridwan";
var_dump($names);

// hitung data dalam arrays
var_dump(count($names));

$fajar = array(
    'id' => 'Fajar',
    'name' => 'Fajar Ganteng',
    'age' => 19
);

var_dump($fajar);
var_dump($fajar['name']);

$ridwan = [
    'id' => 'ridwan',
    'name' => 'Ridwan Pamungks',
    'age' => 27
];
var_dump($ridwan);
var_dump($ridwan['age']);

$fajar = array(
    'id' => 'Fajar',
    'name' => 'Fajar Ganteng',
    'age' => 19,
    'addres' => array(
        'city' => 'Bantul',
        'country' => 'indonesia'
    )
);

var_dump($fajar);
var_dump($fajar['addres']['city']);
echo "\n";

$ridwan = [
    'id' => 'ridwan',
    'name' => 'Ridwan Pamungks',
    'age' => 27,
    'addres' => [
        'city' => 'bantul',
        'country' => 'indonesia'
    ]
];

var_dump($ridwan);
// take spesific arrays
var_dump($ridwan['addres']['country']);

$test = $values == ['indexs' => 1, 2, 3, 4] ? $values : NULL;

var_dump($test);
