<?php


$local_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials\dummyFiles';

$local_server_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials\destination';

function clean_scandir($dir)
{
    return array_values(array_diff(scandir($dir), array('.', '..')));
}


// $files = clean_scandir($local_dir);
// just used for debugging
// function pre_r($array)
// {
//     echo '<pre>';
//     print_r($array);
//     echo '</pre>';
// }
// pre_r($files);

function copy_files($from_dir, $to_dir)
{
    $files = clean_scandir($from_dir);

    for ($i = 0; $i < count($files); $i++) {
        // only deal with files that don't already exist
        if (!file_exists("$to_dir/$files[$i]")) {
            if (copy("$from_dir/$files[$i]", "$to_dir/$files[$i]")) {
                echo "Copied $files[$i] to $to_dir/$files[$i]";
                echo "<br>";
            } else {
                echo "Failed to copy $files[$i]";
                echo "<br>";
            }
        } else {
            echo "File already exists";
            echo "<br>";
        }
    }
    return clean_scandir($to_dir);
}

copy_files($local_dir, $local_server_dir);
