<html>

<head>

</head>

<body>
    <p>Apache server must be stopped and restarted to notice change in max_columns numbers.</p>
    <?php

    $max_columns = 8;
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

                // if start of column, open <tr>
                if ($column === 1) {
                    echo "<tr>";
                }
        ?>

                <td valign="top" bgcolor="lightblue" width="100px" height="100px">
                    <?= $record_id ?>
                </td>

        <?php
                // if column equals max_columns close table row
                if ($column === $max_columns) {
                    echo "</tr>";
                }

                $record_id++;
            }
        }
        ?>
    </table>

</body>

</html>