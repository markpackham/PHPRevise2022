<?php

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

$age = 20;

if ($age >= 18) {
    echo 'You are old enough to buy cigarettes!';
} else {
    echo 'Sorry, you are too young to buy cigarettes.';
}
echo "<br />";

$timeHour = date('H');
if ($timeHour < 12) {
    echo 'Have a good morning!';
} elseif ($timeHour < 17) {
    echo 'Have a good afternoon!';
} else {
    echo 'Have a good evening!';
}
echo "<br />";

$posts = [];
// use isset() instead of empty() to get warning if varible doesn't exist
if (!empty($posts[0])) {
    echo $posts[0];
} else {
    echo 'There are no posts';
}
echo "<br />";
