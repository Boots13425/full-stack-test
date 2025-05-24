<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
<style>
   body {
   font-family: garamond;
  font-size: 20px;

  background-repeat: no-repeat;
  background-size: 100%;
  max-width: 100%;

}
p{
     font-size: 50px;
     font-family: helvetica;
     color:navy;
     background-color:lightblue;
}
tr{
     border:3px;
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
.link{
     padding-left:60%;
}
input{
     border: 3px;
     border-radius:23;
     padding: 10px;
;
}
title{
     background-image:url("test.jpg");
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
          <p>Create Your GroupOn Account</p>
<form name="myForm" method="post" action="process.php" onsubmit="return validateForm()">

     <table border="2">
                 <tr><td>username:</td><td><input type="text" name="uname" placeholder="enter username" required></td></tr>
          <tr><td>password:</td><td><input type="password" name="password" placeholder="enter password" required></td></tr>
         <tr><td>email:</td><td><input type="email" name="email" placeholder="enter email" ></td></tr>
            <tr><td>education:</td></tr>
            <tr> <td><input type="radio" name="education[]" value="10th"></td><td>level 200</td></tr>
             <tr> <td><input type="radio" name="education[]" value="12th"></td><td>level 300</td></tr>
             <tr> <td><input type="radio" name="education[]" value="B.Tech"></td><td>level 400</td></tr>
          <tr><td>semester</td></tr>
            <tr><td>first semester</td><td><input type="checkbox" name="gender" value="first"></td></tr>         
             <tr><td>second semester</td><td><input type="checkbox" name="gender" value="seconds"></td></tr>

          
     </table><br>
     <tr><td><button type="submit" name="submit" value="submit">SUBMIT INFORMATION</button></td></tr>
</form><br>
<div class="link">Already have an account?
     <a href="login.php">click here to login</a>
</div>  
  
</center> 
</body>
</html>
