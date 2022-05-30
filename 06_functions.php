<?php

function registerUser()
{
    global $hiThere;
    $hiThere = 'Hi I am a global variable, no scope can hold me';
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
