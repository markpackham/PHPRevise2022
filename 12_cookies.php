<?php

// 86400 seconds = 1 day
// so the lifespan is 1 day * 4 so 4 days
setcookie('name', 'Billy', time() + 86400 * 4);

echo time();
echo '<br>';

// Get a cookie
if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}
echo '<br>';

// Delete a cookie, set it to the past
setcookie('name', '', time() - 86400);
