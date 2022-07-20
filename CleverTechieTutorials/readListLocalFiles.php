<?php

function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$local_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials';


// scandir() solution

// $files = scandir($local_dir);
// remove unwanted values to only show files and not parent directory paths eg "./"
// $files = array_diff($files, array('.', '..'));
// $files = array_values($files);
// pre_r($files);

// $files = array_values(array_diff(scandir($local_dir), array('.', '..')));
// pre_r($files);

function clean_scandir($dir)
{
    return array_values(array_diff(scandir($dir), array('.', '..')));
}

pre_r(clean_scandir($local_dir));



// opendir() and readir()
