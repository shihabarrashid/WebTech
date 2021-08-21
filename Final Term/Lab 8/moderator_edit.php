<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudBud|Moderator Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="view_style.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="images/logo.png" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse nav-gap nav justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Hello Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="signOut.php">Log Out</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin_dashboard.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="admin_edit.php">View</a></li>
                          <li><a class="dropdown-item" href="admin_reg.php">Add</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Moderator
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="moderator_edit.php">View</a></li>
                          <li><a class="dropdown-item" href="moderator_reg.php">Add</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Instructor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="ins_edit.php">View</a></li>
                          <li><a class="dropdown-item" href="ins_reg.php">Add</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         User
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="user_edit.php">View</a></li>
                          <li><a class="dropdown-item" href="user_reg.php">Add</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <main>
    <?php

$mysqli = new mysqli('localhost', 'root','', 'studbud') or die(mysqli_error($mysqli));
$sql = "SELECT * FROM moderator_data";

$result = $mysqli->query($sql);
//$result = mysqli_fetch_assoc($result);
?>

<div class="conatiner c2">
    <table class="info">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Institution</th>
                <th cplspan="2">Edit/Delete</th>
            </tr>
        </thead>

        <?php
        while($row = mysqli_fetch_assoc($result)) 
        { ?>

        <tr>
            <td> <?php  echo $row['id']; ?> </td>
            <td> <?php  echo $row['name']; ?> </td>
            <td> <?php  echo $row['email']; ?> </td>
            <td> <?php  echo $row['uname']; ?> </td>
            <td> <?php  echo $row['pass']; ?> </td>
            <td> <?php  echo $row['ins']; ?> </td>
            <td> 
                <a class="add2-button" href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a> 
                <a class="add2-button" href="process.php?delete=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
</div>
        <?php } ?>
    </main>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>