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
// remove unwanted values to only show files and not parent directory eg "./"
// $files = array_diff($files, array('.', '..'));
// $files = array_values($files);
// pre_r($files);

// $files = array_values(array_diff(scandir($local_dir), array('.', '..')));
// pre_r($files);

echo "scandir() solution";
echo "<br/>";

function clean_scandir($dir)
{
    return array_values(array_diff(scandir($dir), array('.', '..')));
}

pre_r(clean_scandir($local_dir));

echo "<br/>";
echo "<br/>";
echo "opendir() and readir() solution.";
echo "<br/>";
echo "<br/>";
// opendir() and readir()
function clean_readdir($dir)
{
    $files =  [];
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..') {
                $files[] = $file;
            }
        }
        closedir($handle);
    }
    return $files;
}

pre_r(clean_readdir($local_dir));
