<?php include('inc/header.php') ?>

<?php
// set all variables to nothing
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// Form submit
if (isset($_POST['submit'])) {

  // Validate name 
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    // we can use either filter input or filter var
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  }

  if (empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  echo $nameErr;
  echo $name;
}
?>

<img src="/PHPRevise2022/feedback_project/img/logo.png" class="w-25 mb-3" alt="">
<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Traversy Media</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="Enter your name">
    <div class="invalid-feedback">

    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>

<?php include('inc/footer.php') ?>