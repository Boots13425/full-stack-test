<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * from student where email='$email' and password='$password'";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0)
    {
       
       echo "<script>window.open('test.html','_self')</script>";
    }
    else
    { 
        echo "<script>window.open('login.php','_self')</script>";
        
    }
   
}
?>