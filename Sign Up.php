<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $firstname = $_POST['fname'] ;
   $lastname = $_POST['lname'] ;
   $Gender = $_POST['gender'] ;
   $num = $_POST['number'] ;
   $address = $_POST['add'] ;
   $gmail = $_POST['mail'] ;
   $password = $_POST['pass'] ;

   if (!empty($gmail) && !empty($password) && !is_numeric($gmail))
   {
    $query="insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname','$lastname','$Gender','$num',' $address','$gmail','$password')";

    mysqli_query($con,$query);

    echo "<script type='text/javascript'> alert('Successfully Registerd')</script>";
    
   }
   else{
    echo "<script type='text/javascript'> alert('Please Enter Valid Information')</script>";
   }
   

}

?>







<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="icon" href="icon.png">
        <link rel="stylesheet " href="style.css">
    </head>

    <body>
        <div class="signup">
            <h1>Welcome To ABC Hospital</h1>
        <h2>SIGN UP</h2>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
           
            <label>Last Name</label>
            <input type="text" name="lname" required>
           
            <label>Gender</label>
            <label>Male</label>
            <input class="radio" type="radio" name="gender" value="Male" checked >  
            <label>Female</label> 
            <input class="radio" type="radio" name="gender" value="Female" checked >
            
            
            
           
           <label>Contact number</label>
            
            <input type="text" name="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx" required>
           
            <label>Address</label>
            <input type="text" name="add" required>
           
            <label>Email</label>
            <input type="email" name="mail" required>
           
            <label>Password</label>
            <input type="password" name="pass" required>
            
            <input type="submit" name="" value="Sign Up">
        
        </form>
        <p>By clicking the sign up button, You agree to our<br>
        <a href="">Terms and Condition</a>and <a href="#">Policy Privacy</a> </p>
        <p>Already have an account? <a href="login.php">Login Here</a> </p>
    </div>
    </body>
</html>