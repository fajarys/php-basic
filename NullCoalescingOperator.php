<?php
$data = ['action' => NULL];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothings';
}
echo $action . PHP_EOL;

$action = $data['action'] ?? 'nothing';
echo $action;
