<?php


$local_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials\dummyFiles';

$local_server_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials\destination';

function clean_scandir($dir)
{
    return array_values(array_diff(scandir($dir), array('.', '..')));
}

$files = clean_scandir($local_dir);

// just used for debugging
// function pre_r($array)
// {
//     echo '<pre>';
//     print_r($array);
//     echo '</pre>';
// }
// pre_r($files);

for ($i = 0; $i < count($files); $i++) {
    // only deal with files that don't already exist
    if (!file_exists("$local_server_dir/$files[$i]")) {
        if (copy("$local_dir/$files[$i]", "$local_server_dir/$files[$i]")) {
            echo "Copied $files[$i] to $local_server_dir/$files[$i]";
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
