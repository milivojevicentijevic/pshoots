<?php
require_once 'config.php';

// getting data from the users table
$select_query = "SELECT * FROM users";
$results = $conn->query($select_query) or die($conn->error);
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>View Page</title>
</head>
<body class="d-flex flex-column h-100">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="navbar-nav">
        <a class="navbar-brand mx-3" href="view.php">Home</a>
        <a class="nav-link active mx-3" href="create.php">Create</a>
      </div>
    </div>
  </nav>
</div>
