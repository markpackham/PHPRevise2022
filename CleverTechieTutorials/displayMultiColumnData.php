<html>

<head>

</head>

<body>
    <?php

    $max_columns = 4;
    $data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    ?>

    <table>
        <?php
        $record_id = 0;

        while (true) {
            for ($column = 1; $column <= $max_columns; $column++) {
                // stop Loop when there is no more data available
                if (!isset($data[$record_id])) {
                    // while loop exit point
                    return;
                }

                $record_id++;
            }
        }
        ?>
    </table>

</body>

</html>