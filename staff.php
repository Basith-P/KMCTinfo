<?php include 'inc/header.php';


$sql = 'SELECT * FROM staff';
$result = mysqli_query($conn, $sql);
$staff = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<h2>Staff List</h2>

<?php if (empty($staff)) : ?>
    <p class="lead text-center">No staff</p>
<?php endif ?>

<?php foreach ($staff as $staff) : ?>
    <div class="card my-3 w-75">
        <div class="card-body">
            <?php echo $staff['name'] ?>
            <div class="text-secondary mt-2">
                Email: <?php echo $staff['email'] ?><br>
                Dept: <?php echo $staff['dept'] ?>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php include 'inc/footer.php' ?>