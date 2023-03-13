<?php

// calculates the similarity between two strings
// learned from https://www.youtube.com/shorts/-viuTWP1JWc
// and https://www.php.net/manual/en/function.similar-text.php
// 3rd argument, calculate the similarity in percent

$string1 = "Hello, World!";
$string2 = "Hello, Universe!!!";

$sim = similar_text($string1, $string2, $perc);
echo "similarity: $sim characters ($perc %)\n";


$sim = similar_text('barfoo', 'bafoobar', $perc);
echo "similarity: $sim characters ($perc %)\n";


$sim = similar_text('AAAAAA', 'BBBBBBBBBBBBBBB', $perc);
echo "similarity: $sim characters ($perc %)\n";
