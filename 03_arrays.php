<?php

$numbers = [1, 2, 3, 4, 5];
$colors = ['red', 'blue', 'green'];

echo $numbers[0];
echo '<br>';

// 4 + 5 = 9
echo $numbers[3] + $numbers[4];
echo '<br>';

print_r($numbers);
echo '<br>';

var_dump($numbers);
echo '<br>';


$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red'];
echo '<br>';

var_dump($hex);
echo '<br>';

$person1 = [
    'first_name' => 'John',
    'last_name' => 'Smith',
    'email' => 'john@example.com'
];

$person2 = [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@example.com'
];

// echo $person['first_name'];
$people = [
    $person1, $person2, [
        'first_name' => 'Dave',
        'last_name' => 'Jones',
        'email' => 'dave@example.com'
    ]
];

// get jane@example.com
echo $people[1]['email'];
echo '<br>';

// convert to json
var_dump(json_encode($people));
echo '<br>';
