<?php

function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$local_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials';


// opendir() and readir()


// scandir() solution

// $files = scandir($local_dir);
// $files = array_diff($files, array('.', '..'));
// $files = array_values($files);
// pre_r($files);

$files = array_values(array_diff(scandir($local_dir), array('.', '..')));
pre_r($files);
