<?php
$mysqli = new mysqli('localhost', 'root','', 'studbud') or die(mysqli_error($mysqli));


if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli -> query("DELETE FROM user_data WHERE id = $id");

    header("refresh: 2; url = user_edit.php");
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