<!DOCTYPE html>
<html>
<head>
<title>login form</title>
<style>
        body {
 
 font-family: garamond;
 font-size: 20px;
 background-image:url("unnamed.png");
 background-repeat: no-repeat;
 background-size: 100%;
 max-width: 100%;
 height:auto;
}
td:hover {background-color: #f5f5f5;}
button {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  padding:7px 84px;
  border-radius:12px;
  font-family:arial;
}
button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
</style>
<script>
function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled to create an account");
    return false;
  }
}
  
</script>
</head>
<body>
<center>
<form name="myForm" method="post" action="loginprocess.php" onsubmit="return validateForm()">
     <table border="2">
          <tr><td>email:</td><td><input type="email" name="email" placeholder="enter email"></td></tr>
          <tr><td>password:</td><td><input type="password" name="password" placeholder="enter password"></td></tr>
         
     </table>
     <br>
     <button type="submit" name="submit" value="login">LOGIN</button>
     <p>forgot your password?
     <a href="forgotpassword.php">reset password</a>
</p>
</form>
</center>
</body>
</html>