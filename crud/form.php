<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PHP crud operation</title>
    
</head>
<body>
    <div class="container">
    <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname"required>
            </div>

            <div class="input_field">
                <label for="">password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label for="">Confirm password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label >Gender</label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                </select>
                </div>
            </div>
            <div class="input_field">
                <label >Email</label>
                <input type="text" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label >Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label >Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                <input type="checkbox" required>
                <span class= "checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field" >
              <input type="submit" value="Register" class="btn" name="register">
            </div>

        </div>
    </form>
</div>
</body>
</html>

<?php

 if(isset($_POST['register']))
 {

    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $pwd    = $_POST['password'];
    $cpwd   = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $address =$_POST['address'];

    if((filter_var($email, FILTER_VALIDATE_EMAIL)) and (preg_match("/^[a-zA-Z ]*$/", $fname)) and (preg_match("/^[a-zA-Z ]*$/", $lname)) and (preg_match("/^[a-zA-Z ]*$/", $address)) and (preg_match('/^[0-9]{10}+$/', $phone)) and (strlen($pwd) >= 6) and (strlen($cpwd) >= 6)){
    
    $query = "INSERT INTO `form`(`fname`, `lname`, `password`, `conpassword`, `gender`, `email`,`phone`, `address`) VALUES('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        
        echo "<script> alert('Data Insert Sucessfully')</script>";
       ?>
           <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>
       <?php 
    }
    }
    else
    {
        echo "<script> alert('Please Enter your valid information')</script>";
        
    }   
    
 }


?>