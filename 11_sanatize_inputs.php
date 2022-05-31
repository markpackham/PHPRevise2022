<?php

if (isset($_POST['submit'])) {
    // $age = htmlspecialchars($_POST['age']);
    // $name = htmlspecialchars($_POST['name']);

    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name . ' - ' . $age;
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Age: </label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>