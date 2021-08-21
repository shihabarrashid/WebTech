function validateform(){  
    var name=document.getElementById("name").value;  
    var email=document.getElementById("email").value; 
    var uname=document.myform.uname.value;  
    var password=document.myform.pass.value;  
    var dob=document.getElementById("dob").value;

      
    if (name==""){  
      document.getElementById("nameErr").innerHTML = "Name can't be blank";  
      return false;  
    }

    if (email=="") {
        document.getElementById("emailErr").innerHTML = "Email can't be blank";
        return false;	
    }else{
      document.getElementById("emailErr").innerHTML = "";
    }
    

    atpos = email.indexOf("@");
    dotpos = email.lastIndexOf(".");
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        document.getElementById("emailErr").innerHTML = "Please enter valid Email Address";
        return false;	
    }

    if (uname==null || name==""){  
        alert("Username can't be blank");  
        return false;  
      }else if(password.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
        }  
      }
      function checkEmpty() {
            if (document.myform.name.value = "") {
                alert("Username can't be blank");
              return false;  
            }
        }  
      function checkUName() {
          if (document.getElementById("uname").value == "") {
                document.getElementById("uNameErr").innerHTML = "Username can't be blank";
                document.getElementById("uNameErr").style.color = "red";
                document.getElementById("uname").style.borderColor = "red";
          }else{
                document.getElementById("uNameErr").innerHTML = "";
              document.getElementById("uname").style.borderColor = "black";
          }
          
      }
      function checkPass(){
          if (document.getElementById("pass").value == "") {
                document.getElementById("passErr").innerHTML = "Password can't be blank";
                document.getElementById("passErr").style.color = "red";
                document.getElementById("pass").style.borderColor = "red";
          }else if(document.getElementById("pass").value.length<8){
                document.getElementById("pass").style.borderColor = "red";
                document.getElementById("passErr").style.color = "red";
              document.getElementById("passErr").innerHTML = "Password must be at least 8 characters long.";
          }
          else{
              document.getElementById("passErr").innerHTML = "";
                document.getElementById("passErr").style.color = "red";
              document.getElementById("pass").style.borderColor = "black";
          }

    if (dob=="") {
        document.getElementById("dobErr").innerHTML = "Date of birth can not be empty";
        return false;
    }else{
      document.getElementById("dobErr").innerHTML = "";
    }


}
    
       
function checkEmail(){
var email=document.getElementById("email").value;
atpos = email.indexOf("@");
    dotpos = email.lastIndexOf(".");
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
    }
}


function checkNameBlur() {
if (document.getElementById("name").value == "") {

      document.getElementById("nameErr").innerHTML = "Name can't be blank";

}else{
      document.getElementById("nameErr").innerHTML = "";
}
}

