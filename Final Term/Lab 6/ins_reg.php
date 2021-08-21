<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudBud|Instructor Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="reg_style.css">

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
        <div class="register-col">
            <section class="register">
                <h1>Instructor Registration</h1>
                <form name="myform" action="ins_reg_process.php" method="post" onsubmit="return validateform()">
                    <p>Name</p>
                    <input type="text" name="name" id="name" onblur="checkUName()" onkeyup="checkNameKeyUp()" placeholder="Enter Instructor Name">
                    <small class="text-danger" id="nameErr"></small>

                    <p>Email</p>
                    <input type="text" class="form-control" name = "email" id="email" onblur="checkEmail()" placeholder="Enter Instructor Email">
                    <small class="text-danger" id="emailErr"></small>

                    <p>Username</p>
                    <input type="text" name="uname" id="uname" onblur="checkUName()" placeholder="Enter Instructor Username">
                    <small class="text-danger" id="uNameErr"></small>

                    <p>Password</p>
                    <input type="password" name="pass" id="pass" onblur="checkPass()" placeholder="Enter Instructor Password">
                    <small class="text-danger" id="passErr"></small>

                    <p>Institution</p>
                    <input type="text" name="ins" id="ins" onblur="checkIns()" placeholder="Enter Instructor Institution">
                    <small class="text-danger" id="insErr"></small>

                    <!-- <p>Date of Birth</p>
                    <input type="date" class="form-control" name="dob" id="dob" onblur="checkPass()" placeholder="Enter Instructor DOB">
                    <small class="text-danger" id="dobErr"></small> -->

                    <br> <br> 
                    <input class="reg-buuton" type="submit" name="register" value="Register">
                    <!-- <button type="submit" class="reg-buuton">Sign In</button>
                    <p>Already Have An Account? Sign Up.</p> -->
                </form>
            </section>
        </div>
    </main> 

    <footer>
        
    </footer>

    <script src="reg_validation.js"></script>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>