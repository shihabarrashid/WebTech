<?php
$mysqli = new mysqli('localhost', 'root','', 'task5') or die(mysqli_error($mysqli));

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $varsity = $_POST['varsity'];
    $password = $_POST['password'];

    $mysqli -> query("INSERT INTO user_data (name, email, varsity, password)
    VALUES ('$name', '$email', '$varsity', '$password')"); 

    header("refresh: 2; url = index.php");
}

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli -> query("DELETE FROM user_data WHERE id = $id");

    header("refresh: 2; url = index.php");
}

/*if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $result = $mysqli -> query("SELECT * FROM user_data WHERE id = $id");

    while($row = mysqli_fetch_array($result) )
    {
        $name = $row['name'];
        $email = $row['email'];
        $varsity = $row['varsity'];
        $password = $row['password'];
    }

   
}*/
?>