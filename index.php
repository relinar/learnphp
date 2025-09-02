<?php
$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array = [
    1, 
    'hello',
    true,
    NULL,
    [1, 2, 3]
];
$array = [
    'name' => 'Relina',
    'age' => 17,
    'gender' => 'female',
    'isCool' => true
];
$array = [
    6 => 'lol',
    1,
    2,
    3,
    'name' => 'Relina',
    'age' => 17,
    1000 => 88,
    'hello world',
    'gender' => 'female',
    'isCool' => true,
    4,
    5,
];
var_dump($array[7]);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);
$array = [1, 2, 3];
array_push($array, 4);
array_push($array, 5, 6, 7);
$array[] = 8;
var_dump($array);
