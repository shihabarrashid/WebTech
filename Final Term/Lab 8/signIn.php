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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudBud|Admin Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="reg_style.css">

</head>
<body>
    <main>
        <header>
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">
                      <img src="images/logo.png" alt="logo">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
    
                  <div class="collapse navbar-collapse nav-gap nav justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
    
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                      </li>
    
                      <li class="nav-item">
                        <a class="nav-link" href="service.php">Our Services</a>
                      </li>
    
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                      </li>
    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sign In
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="signIn.php">Admin</a></li>
                          <li><a class="dropdown-item" href="#">Moderator</a></li>
                          <li><a class="dropdown-item" href="#">Instructor</a></li>
                          <li><a class="dropdown-item" href="#">User</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </section>
        </header>
        <div class="register-col">
            <section class="register">
                <h1>Sign In</h1>
                <form name="myform" action="loginprocess.php" method="post" onsubmit="return validateform()">
                    <p>Username</p>
                    <input type="text" name="uname" id="uname" onblur="checkUName()" placeholder="Enter Your Username">
                    <small class="text-danger" id="uNameErr"></small>

                    <p>Password</p>
                    <input type="password" name="pass" id="pass" onblur="checkPass()" placeholder="Enter Your Password">
                    <small class="text-danger" id="passErr"></small>

                    <br> <br> 
                    <input class="reg-buuton" type="submit" name="submit" value="Sign In">
                    <!-- <button type="submit" class="reg-buuton">Sign In</button>
                    <p>Already Have An Account? Sign Up.</p> -->
                </form>
            </section>
        </div>
    </main> 

    <footer>
        
    </footer>

    <script src="loginScript.js"></script>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>