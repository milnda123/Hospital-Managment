<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $gmail = $_POST['mail'] ;
   $password = $_POST['pass'] ;

   if (!empty($gmail) && !empty($password) && !is_numeric($gmail))
   {
     $query = "select * from form where email = '$gmail' limit 1";
     $result= mysqli_query($con,$query);

     if($result)
     {
        if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);

           if($user_data['pass'] == $password)
           {
            $_SESSION['user_name'] = $user_data['name'];
           
            header("location: index.php");
            die;
           }
        }
        
     }
     echo "<script type='text/javascript'> alert('Wrong Username Or Password')</script>";
  
 }
else{
    echo "<script type='text/javascript'> alert('You are Successfully Login')</script>";
}
  }
?>






<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
        <link rel="icon" href="icon.png">
        <link rel="stylesheet " href="style.css">
    </head>

    <body>
        <div class="login">
            <h1 class=h2>LOG IN</h1>
            <form method="POST">
                
                <label>Email</label>
                <input type="email" name="mail" required>
               
                <label>Password</label>
                <input type="password" name="pass" required>
                
                <input type="submit" name="" value="Log In">
            
            </form>
            <p>Not have an Account?<a href="Sign Up.php">Sign Up here</a> </p>

    </body>
    </html>