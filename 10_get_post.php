<?php

if (isset($_GET['nameGet']) && isset($_GET['age'])) {
    echo $_GET['nameGet'];
    echo '<br>';
    echo $_GET['age'];
    echo '<br>';
}

if (isset($_POST['submit'])) {
    echo '<h3>' . $_POST['username'] . '</h3>';
    echo '<br>';
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?nameGet=Jim&age=20">Get Name Jim</a>
<br>
<br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="username">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>