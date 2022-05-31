<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
    // Brad Sara Mike John22 is output and 22 is the bytes of the file
    // echo readFile($file);

    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}
