<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $mysqli = new mysqli('localhost', 'root','', 'task5') or die(mysqli_error($mysqli));
    $sql = "SELECT * FROM user_data";

    $result = $mysqli->query($sql);
    //$result = mysqli_fetch_assoc($result);
    ?>

    <div>
        <table class="info">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>University</th>
                    <th>Password</th>
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
                <td> <?php  echo $row['varsity']; ?> </td>
                <td> <?php  echo $row['password']; ?> </td>
                <td> 
                    <a class="add2-button" href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a> 
                    <a class="add2-button" href="process.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>


            
        </table>
    </div>

    <div class="gap"></div>
    <div class="gap"></div>


    <div >
        <section class="sigin">
            <h1>Add Information</h1>
            <form action="process.php" method="post">
                <p>Name</p>
                <input type="text" name="name">
                <p>Email</p>
                <input type="text" name="email">
                <p>University</p>
                <input type="text" name="varsity">
                <p>Password</p>
                <input type="password" name="password"> 
                <br> <br>
                <button type="submit" name="save" class="add-button">Add Informaton</button> 
            </form>
        </section>
    </div>
</body>
</html>