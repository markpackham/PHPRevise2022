<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes " or '
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Timmy';
$age = 50;
$hasKids = false;
$cashOnHand = 11.11;

var_dump($cashOnHand);
echo '<br>';

echo $name . ' is ' . $age . ' years old';
echo '<br>';

echo "$name is $age years old";
echo '<br>';

// cleaner version
echo "${name} is ${age} years old";
echo '<br>';

// Unlike JavaScript this will implicitly convert to Int
$x = '1' + '1';
var_dump($x);
echo '<br>';

// Constants (handy for database credentials that you'll never change)
define('HOST', 'localhost');
define('USER', 'root');
var_dump(HOST);
