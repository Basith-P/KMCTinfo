<?php include 'inc/header.php';


$sql = 'SELECT * FROM students';
$result = mysqli_query($conn, $sql);
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<h2>Students List</h2>

<?php if (empty($students)) : ?>
  <p class="lead text-center">No students</p>
<?php endif ?>

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Department</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $student) : ?>
      <tr>
        <td><?php echo $student['id'] ?></td>
        <td><?php echo $student['name'] ?></td>
        <td><?php echo $student['email'] ?></td>
        <td><?php echo $student['dept'] ?></td>
        <td><?php echo $student['year'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?php include 'inc/footer.php' ?>