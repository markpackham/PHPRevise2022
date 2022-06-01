<?php

$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if (isset($_POST['submit'])) {
    if (!empty($_FILES['upload']['name'])) {
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        // get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $allowed_ext)) {
            // limit file upload size to less than 1 million bytes or less than 1MB
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
                echo '<p style="color: green;">File uploaded!</p>';
            } else {
                echo '<p style="color: red;">File too large!</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid file type!</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <p>
            Select image to upload ('png', 'jpg', 'jpeg', 'gif'):
        </p>
        <p>
            File must be less than 1MB
        </p>
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>