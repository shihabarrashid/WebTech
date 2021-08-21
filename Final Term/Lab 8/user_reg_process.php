<?php
if(isset($_POST["register"])){
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ins = $_POST["ins"];

    $conn = mysqli_connect('localhost','root','','studbud');

    $sql = "SELECT * FROM user_data WHERE uname ='$uname'";
    $result = mysqli_query($conn,$sql);
    $temp1 = mysqli_num_rows($result);

    $sql = "SELECT * FROM user_data WHERE email ='$email'";
    $result = mysqli_query($conn,$sql);
    $temp2 = mysqli_num_rows($result);

    if($temp1 == 1 || $temp2 == 1){
        echo "Username or Email is already registered!";
        echo "Try again!";
        header("refresh: 3; url = user_reg.php");
    }
    else{
        $conn = mysqli_connect('localhost','root','','studbud');
        $sql = "INSERT INTO user_data(uname,pass,name,email,ins) VALUES('$uname','$pass','$name','$email','$ins')";
        if(mysqli_query($conn,$sql)){
            echo"Registration Success";
            header("refresh: 2; url = admin_dashboard.php");
        }
    }
}
else{
    if(session_status() == PHP_SESSION_NONE){

    }
    echo "No session";
    header("refresh: 2;url = index.php");
}

?>