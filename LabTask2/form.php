<!DOCTYPE html>

<html>
 <head>

   <meta charset="UTF-8">
   <meta name="description" content="">
   <title>Form Validation|PHP</title>


 </head>

 <body>
   <header>

   </header>

   <main>

     <?php
     // define variables and set to empty values
     $nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bgroupErr = "";
     $name = $email = $dob =$gender = $degree = $bgroup = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
       // check if empty
       if (empty($_POST["name"]))
       {
         $nameErr = "Name is required";
       }
       else
       {
         $name = ($_POST["name"]);
         // check if name only contains letters and whitespace
         if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
         {
           $nameErr = "Only Letters and Dash allowed";
           $name="";
         }

         if (str_word_count($name) <2)
         {
           $nameErr = "Should contain atleast two words";
           $name="";
         }

       }

       if (empty($_POST["email"]))
       {
         $emailErr = "Email is required";
       }
       else
       {
         $email = ($_POST["email"]);
         // check if e-mail address is well-formed
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid Email Format";
           $email="";
         }
       }

       if (empty($_POST["dob"]))
       {
         $dob = "Date of Birth is Required";
       }
       else
       {
         $dob = ($_POST["dob"]);
         // check if valid
        // if (!preg_match(,$dob))
        //{
        //  $dobErr = "Invalid Date";
      //  }
       }
       }

       if (empty($_POST["gender"]))
       {
         $genderErr = "Gender is Required";
       }
       else
       {
         $gender = ($_POST["gender"]);
       }

       if (isset($_POST["submit"]))
       {
         $checkedDegree = 0;
         $values = $_POST['c'];

         $checkedDegree = count($values);

         if ($checkedDegree < 2)
         {
           $degreeErr = "Select at least 2";
         }
         else if ($checkedDegree >=4)
         {
           $degreeErr = "Select only 2";
         }
         else
         {
           $degree = ($_POST["degree"]);
         }
       }
     ?>

     <h2>PHP Form Validation Form</h2>
     <p><span class="error">* required field</span></p>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       Name: <input type="text" name="name" value="<?php echo $name;?>">
       <span class="error">* <?php echo $nameErr;?></span>
       <br><br>
       E-mail: <input type="email" name="email" value="<?php echo $email;?>">
       <span class="error">* <?php echo $emailErr;?></span>
       <br><br>
       Date of Birth: <input type="date" name="date" value="<?php echo $dob;?>">
       <span class="error">* <?php echo $dobErr;?></span>
       <br><br>
       Gender:
       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
       <span class="error">* <?php echo $genderErr;?></span>
       <br><br>
       Degree:
       <input type="checkbox" name="c[1]" value="SSC">SSC
       <input type="checkbox" name="c[2]" value="HSC">HSC
       <input type="checkbox" name="c[3]" value="BSc">BSc
       <input type="checkbox" name="c[4]" value="MSc">MSc
       <span class="error">* <?php echo $degreeErr;?></span>
       <br><br>
       Blood Group:
       <select name="bg">
         <option value="select" selected></option>
         <option value="A+">A+</option>
         <option value="B+">B+</option>
         <option value="AB+">AB+</option>
         <option value="O+">O+</option>
       </select>
       <span class="error">* <?php echo $bgroupErr;?></span>
       <br><br>
       <input type="submit" name="submit" value="Submit">
     </form>

     <?php
     echo "<h2>Your Input:</h2>";
     echo $name;
     echo "<br>";
     echo $email;
     echo "<br>";
     echo $dob;
     echo "<br>";
     echo $gender;
     echo "<br>";
     echo $degree;
     echo "<br>";
     echo $bgroup;
     echo "<br>";
     ?>

   </main> <br>

   <footer>

   </footer>

 </body>

</html>
