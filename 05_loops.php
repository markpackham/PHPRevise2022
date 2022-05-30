<?php

for ($x = 0; $x <= 5; $x++) {
    echo "Number: ${x} <br>";
}

echo '<br>';

$x = 1;

while ($x <= 5) {
    echo "Number: ${x} <br>";
    $x++;
}

echo '<br>';

$x = 9999;
// can't remember the last time I ever used a do while loop
// this will echo out 9999 once no matter what
do {
    echo "Number: ${x} <br>";
    $x++;
} while ($x <= 5);

echo '<br>';

$posts = ['Post One', 'Post Two', 'Post Three'];
foreach ($posts as $index => $post) {
    echo "${index} - ${post} <br>";
}

echo '<br>';

// this looks less tidy than "foreach" but is handy if performance is a big things
$posts = ['Post One', 'Post Two', 'Post Three'];
for ($x = 0; $x < count($posts); $x++) {
    echo "${x} - $posts[$x]<br>";
}

echo '<br>';

$person = [
    'first_name' => 'Billy',
    'last_name' => 'Smith',
    'email' => 'billy@gmail.com',
];

// get the keys and value
foreach ($person as $key => $val) {
    echo "${key} - ${val} <br>";
}
