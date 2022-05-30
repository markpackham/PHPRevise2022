<?php

function registerUser()
{
    global $hiThere;
    $hiThere = 'Hi I am a global variable, no scope can hold me';
    $tapped = 'No one see call me unless I get returned so I am stuck here';
    echo 'User registered';
}

registerUser();

echo '<br />';
echo $hiThere;


function registerUser2($username)
{
    echo "User ${username} has been registered!";
}

echo '<br />';
registerUser2("Billy");


function sum($num1 = 1000, $num2 = 2000)
{
    return $num1 + $num2;
}

echo '<br />';
$number = sum(1, 2);
echo $number;

echo '<br />';
$number2 = sum();
echo $number2;


$subtract = function ($num1, $num2) {
    return $num1 - $num2;
};
echo '<br />';
echo $subtract(30, 10);

// ugly single line shorthand function
$multiply = fn ($num1, $num2) => $num1 * $num2;
echo '<br />';
echo $multiply(2, 4);
