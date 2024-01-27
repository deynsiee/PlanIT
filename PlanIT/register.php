<?php
// establish connection to database
$conn = mysqli_connect('localhost', 'root', '', 'login_db');

if(isset($_POST['signup']))
{
    // escape user input to prevent SQL injection
    $userID = mysqli_fetch_array($conn -> query("SELECT COUNT(*) FROM register_form"))[0];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $civil_stat = $_POST['status'];
    $age = $_POST['age'];
    $regdate = $_POST['regdate'];
    $gender = $_POST['gender'];

    if(!empty($fname))
    {
        $query = "INSERT INTO register_form(userID, fname, lname, uname, email, pswd, useradr, dob, phone, civil_stat, age, regdate, gender)
        VALUES ($userID, '$fname', '$lname', '$uname', '$email', '$pswd', '$address', '$dob', $phone, '$civil_stat', $age, '$regdate', '$gender')";
        
        $query2 = "INSERT INTO login_form(loginID,uname,pswd) VALUES ($userID,'$uname','$pswd')";
      $query3 = "INSERT INTO wh_form(uname, weight, height) VALUES('$uname',0,0)";  
        if($conn -> query($query)){ 
            if($conn -> query($query2)){ 
              if($conn -> query( $query3)){ 
                  echo "<script> window.location.href = 'login.php' </script>";
               }
            }
          }
        
      
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---- 
        FONT AWESOME
    ---->
    <script src="https://kit.fontawesome.com/e8a4207e40.js" crossorigin="anonymous"></script>
    <!---- 
        CSS LINK 
    ---->
    <link rel="stylesheet" href="registration.css">
    <!---- 
        BOOTSTRAP
        FONT LINK - POPPINS 
    ---->   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <!---- 
        WEBSITE TITLE
    ---->
    <title>PlanIT</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

    <div class="container">
        <div class="title">Sign Up</div>
        <div class="content">
          <form method='post'>
            <div class="user-details">
              <div class="input-box">
                <span class="details">First Name</span>
                <input type="text" id="fname" name="fname" required>          
              </div>
              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="address" id="address" required>
              </div>
              <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" id="lname" name="lname" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number (Ex. XXXX-XXX-XXXX)</span>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>
              </div>
              <div class="input-box">
                <span class="details">Username</span>
                <input type="text" id="uname" name="uname" required>
              </div>
              <div class="input-box">
                <span class="details">Civil Status</span>
                <input type="text" name="status" id="status" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" id="email" required>
              </div>
              <div class="input-box">
                <span class="details">Age</span>
                <input type="text" name="age" id="age" required>
              </div>
              <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="password" id="password"required> 
              </div>
              <div class="input-box">
                <span class="details">Gender</span>
                <input type="text" name="gender" id="gender" required>
              </div>
              <div class="input-box">
                <span class="details">Date of Birth</span>
                <input type="date" name="dob" id="dob" required>
              </div>
              <div class="input-box">
                <span class="details">Registration Date (Set to Today)</span>
                <input type="date" name="regdate" id="regdate" required>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Sign Up" name='signup'>
            </div>
          </form>
          <div class="log-in-link">
          <h3>Already have an account? <a href="login.php">Log in.</a></h3>
          <h4><a href="about.php">About Us</a></h4>
 
        </div>
        </div>
      </div>
    

</body>
</html>