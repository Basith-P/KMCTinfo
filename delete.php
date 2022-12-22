<?php include 'inc/header.php'; ?>

<h3>Remove a staff or a student</h3>
<form action="#" class="mt-5">
    <label for="id" class="form-label mt-5">Name</label>
    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null ?>" id="id" name="id" placeholder="Enter the id">
    <div class="invalid-feedback"><?php echo $nameErr ?></div>
    <label for="type" class="form-label mt-5">Satff or Student?</label>
    <select name="type" id="type" class="form-control">
        <option value="Staff" default>Staff</option>
        <option value="Student">Student</option>
    </select>
</form>


<?php include 'inc/footer.php'; ?>