<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  // define variables and set to empty values
  $nameErr = $passwordErr = "";
  $name = $password = "";

$hasError=false;
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // check if empty
    if (empty($_POST["name"]))
    {
      $nameErr = "Name is required";
      $hasError = true;
    }
    else
    {
      $name = ($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
      {
        $nameErr = "Only Letters and Dash allowed";
        $hasError = true;
      }

      if (str_word_count($name) <2)
      {
        $nameErr = "Should contain atleast two words";
        $hasError = true;
      }
    }

      if(empty($_POST["password"]))
      {
        $passwordErr="Password Required";
        $hasError = true;
      }
      elseif(strlen($_POST["password"]) < 8)
      {
            $passwordErr = "password must contain atleast 8 characters";
            $hasError = true;
      }
      elseif(hasPassword($_POST["password"]) == false)
      {
        $passwordErr = "password must contain at least 8 character, 1 special character(#),1 number and combination of uppercase and lowercase alphabet.";
        $hasError = true;
      }
      else
      {
        $password = $_POST["password"];
      }

      if(!$hasError)
      {
      echo $_POST["name"]."<br>";
      echo $_POST["password"]."<br>";
      }


  }


  ?>

    <form action=" " method="post">

        <fieldset>
        <Legend><h1>Login</h1></Legend>
        <table>
              <tr>
                Name: <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="password" name="password" /></td>
                <td><span><?php echo $passwordErr; ?></span><br /></td>
              </tr>
              <tr colspan="3">
                  <td colspan="3"><hr></td>
              </tr>
              <tr>
                <td><input type="checkbox">Remember me</td>

              </tr>
              <tr>
                    <td><input type="submit" name="signup"  /></td>
                    <td>
                    <a href="login.php">Forgot Password?</a>
                    </td>
              </tr>
            </table>
        </fieldset>
        </form>
</body>
</html>
