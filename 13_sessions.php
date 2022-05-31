<?php

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(
        INPUT_POST,
        'username',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    $password = filter_input(
        INPUT_POST,
        'password',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );

    if ($username == 'billy' && $password == 'password') {
        // Set Session variable
        $_SESSION['username'] = $username;
        // Redirect user to another place
        header('Location: /PHPRevise2022/extras/session_worked.php');
    } else {
        echo 'Incorrect username or password';
    }
}
?>

<form action="<?php echo htmlspecialchars(
                    $_SERVER['PHP_SELF']
                ); ?>" method="POST">
    <div>
        <label>Username (billy): </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label>Password (password): </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>