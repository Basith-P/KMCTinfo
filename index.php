<?php include 'inc/header.php';

$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// Form submit
if (isset($_POST['submit'])) {
  // Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Please enter your name';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // Validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Please enter your email';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // upload data
  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    $type = $_POST['type'];
    $dept = $_POST['dept'];
    $year = $_POST['year'];

    if ($type == 'Staff')
      $sql = "INSERT INTO staff (name, email, dept) VALUES ('$name', '$email', '$dept')";
    else
      $sql = "INSERT INTO students (name, email, dept, year) VALUES ('$name', '$email', '$dept', '$year')";

    if (mysqli_query($conn, $sql)) {
      //Success
      if ($type == 'Staff')
        header('Location: staff.php');
      else
        header('Location: students.php');
    } else {
      //Error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>

<h3>Add a staff or a student</h3>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null ?>" id="name" name="name" placeholder="Enter the name">
    <div class="invalid-feedback"><?php echo $nameErr ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Satff or Student?</label>
    <select name="type" id="type" class="form-control">
      <option value="Staff" default>Staff</option>
      <option value="Student">Student</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="dept" class="form-label">Department</label>
    <select name="dept" id="dept" class="form-control">
      <option value="AU">AU</option>
      <option value="CE">CE</option>
      <option value="CSE" default>CSE</option>
      <option value="ECE">ECE</option>
      <option value="EEE">EEE</option>
      <option value="ME">ME</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">Year<span class="form-desc"> (Ignore year for staff)</span></label>
    <select name="year" id="year" class="form-control">
      <option value="First">First</option>
      <option value="Second">Second</option>
      <option value="Third">Third</option>
      <option value="Final">Final</option>
    </select>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Add" class="btn btn-dark w-100">
  </div>
</form>
<?php include 'inc/footer.php' ?>