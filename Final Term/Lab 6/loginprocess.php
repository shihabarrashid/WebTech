<?php
if(session_status()>=0){
    if(isset($_SESSION["uname"])){
        if($_SESSION["uanme"]=="Admin"){
            echo "Redirecting";
            header("refresh: 0.5; url = admin_dashboard.php");
        }
        else{
            echo "Redirecting";
            header("refresh: 0.5; url = signIn.php");
        }
        
    }
}



if(isset($_POST["submit"])){
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    $conn = mysqli_connect('localhost','root','','studbud');
    $sql = "SELECT * FROM admin_data WHERE uname ='$uname' and pass = '$pass'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        if($_POST["uname"]=="Admin" && $_POST["pass"]=="Admin"){
            session_start();
            $_SESSION["uname"] = $uname;
            echo "Redirecting";
            header("refresh: 0.5; url = admin_dashboard.php");
            exit();
        }
        else{
            session_start();
            $_SESSION["uname"] = $uname;
            $_SESSION["pass"] = $pass;
            echo "Redirecting";
            header("refresh: 0.5; url = admin_dashboard.php");
            exit();
        }
    }
    else{
        echo "User not found!";
        header("refresh: 0.5; url = signIn.php");
    }
}

?>