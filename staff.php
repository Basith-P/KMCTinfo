<?php include 'inc/header.php';


$sql = 'SELECT * FROM staff';
$result = mysqli_query($conn, $sql);
$staff = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<h2>Staff List</h2>

<?php if (empty($staff)) : ?>
    <p class="lead text-center">No staff</p>
<?php endif ?>

<table class="table table-bordered mt-3">
    <thead class="table-secondary">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Department</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($staff as $staff) : ?>
            <tr>
                <td><?php echo $staff['id'] ?></td>
                <td><?php echo $staff['name'] ?></td>
                <td><?php echo $staff['email'] ?></td>
                <td><?php echo $staff['dept'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php include 'inc/footer.php' ?>