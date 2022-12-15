<?php include 'inc/header.php';


$sql = 'SELECT * FROM students';
$result = mysqli_query($conn, $sql);
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
   
    <h2>Students List</h2>

    <?php if(empty($students)) : ?>
      <p class="lead text-center">No students</p>
    <?php endif ?>

    <?php foreach($students as $student) : ?>
      <div class="card my-3 w-75">
        <div class="card-body">
          <?php echo $student['name'] ?>
          <div class="text-secondary mt-2">
            Email: <?php echo $student['email'] ?><br>
            Dept: <?php echo $student['dept'] ?><br>
            Year: <?php echo $student['year'] ?>
          </div>  
        </div>
      </div>
    <?php endforeach ?>
   <?php include 'inc/footer.php' ?>