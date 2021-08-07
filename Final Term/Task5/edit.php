<?php
$mysqli = new mysqli('localhost', 'root','', 'task5') or die(mysqli_error($mysqli));

if(isset($_GET['edit']))
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

   
}
?>

<?php
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $varsity = $_POST['varsity'];
    $password = $_POST['password'];

    $result = $mysqli -> query("UPDATE user_data SET name='$name' WHERE id=$id");

    header("refresh: 2; url = index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div >
        <section class="sigin">
            <h1>Edit Information</h1>
            <form action="" method="post">
                <p>Name</p>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <p>Email</p>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <p>University</p>
                <input type="text" name="varsity" value="<?php echo $varsity; ?>">
                <p>Password</p>
                <input type="password" name="password" value="<?php echo $password; ?>"> 
                <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
                <br> <br>
                <button type="submit" name="update" value="update"  class="add-button">Edit Informaton
                </button> 
            </form>
        </section>
    </div>
</body>
</html>