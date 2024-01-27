<?php
$conn = mysqli_connect('localhost', 'root', '', 'login_db');
session_start();

 if(isset($_POST['login'])){
                        $uname = $_POST['uname']; 
				$pswd = $_POST['pswd']; 
                        $check_account_sql = "SELECT * FROM login_form WHERE uname= '$uname'"; 
                        if($conn -> query($check_account_sql)){
                            $check_account_exist  = $conn -> query($check_account_sql);  
                            $account = mysqli_fetch_array($check_account_exist); 
                            if(!(empty($account))){
                                if($pswd != $account['pswd']){
                                        echo "<h6> Incorrect password </h6>";
                            } else { 
                    $_SESSION['user'] = $uname;
					echo "<script> window.location.href = 'planner.php' </script>";
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
    <link rel="stylesheet" href="log-in.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@500;600;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
    <title>PlanIT</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <div class="container">
        <div class="title">Log In</div>
        <div class="content">
            <form method='post'>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" id="uname" name="uname" required>          
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="pswd" name="pswd" required> 
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Log In" name='login'>
                </div>
            </form>
            <div class="sign-up-link">
                <h3>New To PlanIT? <a href="register.php">Register.</a></h3>
                <h4><a href="about.php">About Us</a></h4>
            </div>
     </div>
     </div>

<footer>

</footer>
              
    
</body>
</html>