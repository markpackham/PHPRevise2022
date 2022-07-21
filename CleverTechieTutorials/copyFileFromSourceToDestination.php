<?php

$local_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials\dummyFiles';

$local_server_dir = 'C:\xampp\htdocs\PHPRevise2022\CleverTechieTutorials\destination';

function clean_scandir($dir)
{
    return array_values(array_diff(scandir($dir), array('.', '..')));
}

$files = clean_scandir($local_dir);
