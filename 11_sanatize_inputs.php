<?php

if (isset($_POST['submit'])) {
    echo '<h3>' . $_POST['username'] . '</h3>';
    echo '<br>';
    echo '<h3>' . $_POST['age'] . '</h3>';
    echo '<br>';
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Age: </label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>