<?php

$data = ['galka' => 'Salad', 'Burger', 'Pizza'];
$data[1] = 'Chicken';

$data[] = 'Tomato Soup';

var_dump($data);
var_dump($data['galka']);
var_dump($data[0]);

print_r($data);


$matrix = [
    'galka' => ['Salad', 'Spaghetti'],
    'john' => 'Burger',
    'mary' => 'Pizza'
];

var_dump($matrix);
var_dump($matrix['galka'][1]);

// Error control operator - @
// Example:

@var_dump(
    (string) [1]
);

// Increment:

$num = 5;
var_dump(++$num);

$num++;
var_dump($num);
