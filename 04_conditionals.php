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

echo !empty($posts[0]) ? $posts[0] : 'There are no posts';
echo "<br />";

$firstPost = !empty($posts[0]) ? $posts[0] : 'No posts here';
echo $firstPost;
echo "<br />";

// Null Coalescing Operator ?? (PHP 7.4)
// for people to lazy to write, !empty($posts[0]) ? $posts[0] : null
// https://www.php.net/manual/en/migration70.new-features.php
$firstPost = $posts[0] ?? null;
var_dump($firstPost);
echo "<br />";

$favcolor = 'grey';
switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    default:
        echo 'Your favorite color is not red, blue, nor green!';
}
