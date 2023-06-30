<?php
$name = "Value";
$name = NULL;

$age = null;

echo "NAME :";
echo $name;
echo "\n";

echo "AGE :";
echo $age;
echo "\n";

echo "Is Null Name ? :";
// not efective
is_null($name);
var_dump($name);

// result is same
$is_null = is_null($name);
var_dump($is_null);

// better use isset
var_dump(is_null($name));

// unset = delete variable

$delete = "hapus";
unset($delete);

$delete = "hapus";
$delete = NULL;
// recomended using isset
var_dump(isset($delete));


// echo $delete;
