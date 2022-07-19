<?php

$colors = [
    [254, 145, 154],
    [153, 145, 188],
    [153, 90, 145],
    [255, 137, 92]
];

foreach ($colors as $id => $rgb) {
    $hex_color = sprintf("#%02x%02x%02x", $rgb[0], $rgb[1], $rgb[2]);
    echo $hex_color . '<br />';

    echo "<div style='background-color:$hex_color;width:50;height:50;'></div>";
}
