<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="post">
    
        <fieldset>
        <Legend><h1>Registration</h1></Legend>
        <table>
              <tr>
                <td>Name:</td>
                <td><input type="text" name="firstname" id="firstname" required> </td>
              </tr>
              <tr colspan="3">
                <td colspan="3"><hr></td>
            </tr>
              <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="email" required></td>
              </tr>
              <tr colspan="3">
                <td colspan="3"><hr></td>
            </tr>
              <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username" required></td>
              </tr>
              <tr colspan="3">
                <td colspan="3"><hr></td>
            </tr>
              <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password" required></td>
              </tr>
              <tr colspan="3">
                <td colspan="3"><hr></td>
            </tr>
              <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="cpassword" id="cpassword" required></td>
              </tr>
              <tr colspan="3">
                  <td colspan="3"><hr></td>
              </tr>
              <tr>
                  <td>Gender: </td>
                  <td><input type="radio" id="male" name="male" value="male">
                      <label for="html">Male</label>
                      <input type="radio" id="Female" name="Female" value="Female">
                      <label for="css">Female</label>
                      <input type="radio" id="Other" name="Other" value="Other">
                      <label for="javascript">Other</label></td>
                  
              </tr>
              <tr>
                  <td>Date of Birth:</td>
                <td><input type="date"></td>
              </tr>
              <tr>
                    <td><input type="submit" name="submit"  /></td>
                    <td>
                    <input type="reset">
                    </td>
              </tr>
            </table>
        </fieldset>
        </form>
</body>
</html>