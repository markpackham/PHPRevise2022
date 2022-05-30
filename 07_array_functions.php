<?php

$fruits = ['apple', 'banana', 'orange'];

// get array length
echo count($fruits);
echo '<br>';

// search array
var_dump(in_array('banana', $fruits));
echo '<br>';

var_dump(in_array('Cave Squig', $fruits));
echo '<br>';

// add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
print_r($fruits);
echo '<br>';

// Adds to the beginning
array_unshift($fruits, 'kiwi');
print_r($fruits);
echo '<br>';
