<?php

function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . ' ';
    echo '<br>';
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ';
    echo '<br>';
} finally {
    echo 'First finally, I run no matter what happens.';
    echo '<br>';
}

try {
    echo inverse(0) . ' ';
    echo '<br>';
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ';
    echo '<br>';
} finally {
    echo "Second finally ";
    echo '<br>';
}

echo 'Hello World';
