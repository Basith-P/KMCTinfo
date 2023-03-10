<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>KMCTians' info</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="index.php">KMCTians' info</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Add</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="delete.php">Delete</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="staff.php">Staff List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="students.php">Students List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container d-flex flex-column align-items-center">