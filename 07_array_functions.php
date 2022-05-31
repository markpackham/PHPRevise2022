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

// pop off from end
array_pop($fruits);
// pop off from beginning
array_shift($fruits);
// target specific
unset($fruits[2]);

print_r($fruits);
echo '<br>';

$fruits = ['apple', 'banana', 'orange', 'mango', 'raspberry', 'kiwi'];
// split into 2 chunks
$chunked_array = array_chunk($fruits, 2);
// Array ( [0] => Array ( [0] => apple [1] => banana ) [1] => Array ( [0] => orange [1] => mango ) [2] => Array ( [0] => raspberry [1] => kiwi ) )
print_r($chunked_array);
echo '<br>';
// array ( 0 => array ( 0 => 'apple', 1 => 'banana', ), 1 => array ( 0 => 'orange', 1 => 'mango', ), 2 => array ( 0 => 'raspberry', 1 => 'kiwi', ), )
var_export($chunked_array);
echo '<br>';

// concat arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
echo '<br>';
// spread just like JS
$arr4 = [...$arr1, ...$arr2];
var_dump($arr4);
echo '<br>';

$aKey = ['green', 'red', 'yellow'];
$bValue = ['avocado', 'apple', 'banana'];
// first array used for keys and second for values
$cKeyAndValue = array_combine($aKey, $bValue);
print_r($cKeyAndValue);
echo '<br>';
