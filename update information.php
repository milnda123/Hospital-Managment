<?php
session_start();

include("info.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   $gmail = $_POST['email'];
   $NIC = $_POST['id'];
   $ContactNumber = $_POST['number'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $province = $_POST['province'];
   $postalcode = $_POST['zipcode'];
   $fullname = $_POST['fullname'];
   $relationship = $_POST['relationship'];
   $EContactNumber = $_POST['cnumber'];
   $InsuranceCompany = $_POST['icompany'];
   $policynumber = $_POST['pnumber'];
   $groupnumber = $_POST['gnumber'];

   if (!empty($gmail) && !is_numeric($gmail)) {
      
      $query = "UPDATE personal_information SET fname = '$firstname', lname = '$lastname', gmail = '$gmail',id = '$NIC', number = '$ContactNumber', address = '$address', city = '$city', province = '$province', zipcode = '$postalcode', fullname = '$fullname', relationship = '$relationship', cnumber = '$EContactNumber', iCompany = '$InsuranceCompany', pnumber = '$policynumber', gnumber = '$groupnumber' WHERE id = '$NIC'";

      mysqli_query($con, $query);

      echo "<script type='text/javascript'> alert('Successfully Updated')</script>";
   } else {
      echo "<script type='text/javascript'> alert('Please Enter Valid Information')</script>";
   }
}
?>





<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="patient information.css"/>
        <title>Update Information</title>
        <link rel="icon" href="icon.png">
    </head>

    <body>
        <img class="logo" src="Logo.png"/>
        <hr />
        
        
            <div class="box">
    
                <h1 class="h1">New Patient Registration</h1>
                <p class="p">Please fill in the form below</p>
                <hr class="line"/><br>

                

                <div class="info">
                    <h2 class="h2">(1) Personal Information</h2><br>
                
            <form class="form" method="POST">
                
                &nbsp;&nbsp;&nbsp;&nbsp;<label>First Name</label>
                <input type="text" name="fname" >&nbsp;&nbsp;&nbsp;&nbsp;
               
                &nbsp;&nbsp;&nbsp;&nbsp;<label>Last Name</label>
                <input type="text" name="lname"><br><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;<label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email" placeholder="ex:myname@example.com" ><br><br><br>

                

            <label>NIC (National Identity Card)</label>
             <input type="CNIC" class="id"  name="id"  placeholder="xxxxxxxxxv"  /><br><br><br>
             <p>(Enter the NIC number here given when you registered )</p>

             


             <hr class="line1"/><br><br>

             <label>Contact Number</label>
             <input type="tel" name="number" class="number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx"/><br><br><br>

             <label>Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="address" />

             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>City</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="city" /><br><br><br>

             <label>Province</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name="province" >
                <option value="province">Select Your Province</option>
                <option value="Northern">Northern Province</option>
                <option value="North Central">North Central Province</option>
                <option value="North Western">North Western Province</option>
                <option value="Central">Central Province</option>
                <option value="Eastern">Eastern Province</option>
                <option value="Western">Western Province</option>
                <option value="Sabaragamuwa">Sabaragamuwa Province</option>
                <option value="Uva">Uva Province</option>
                <option value="Southern">Southern Province</option>

             </select>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Postal/Zip code</label>
             <input type="text" name="zipcode" /><br><br>

             <hr class="line1"/><br><br>

            <p>In a Case of emergency...</p><br>

            <label>Full Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="fullname" /><br><br><br>

            <label>Relationship</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="relationship" /><br><br><br>

            <label>E Contact Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="tel" name="cnumber" class="number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx"/><br><br><br>

             <hr class="line1"/><br><br>

             <h2 class="h2">(2) Insurance Information</h2><br><br>

             <label>Insurance Company</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text"  name="icompany"/><br><br><br>

             <label>Policy Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text"  name="pnumber"/><br><br><br>

             <label>Group Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text"  name="gnumber"/><br><br><br><br><br><br>

             <label class="checkbox" for="myCheckboxId">
                <input class="checkbox_ _input" type="checkbox" name="checkbox" id="checkbox" required>
                <div class="checkbox_ _box" requried></div> 
                <p class="cbox">I certify that the Information submitted by me is correct and true.</p> <br><br><br>
                </label>
                <input  type="submit" name="submit" value="Update Data"><br><br>
                <p class=click>Go To Home Page</p>
                <p class=click><a href="Home page.php"> Click Here </p>
                
              

            </form>
            </div>
    </body>
</html>