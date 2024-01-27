<?php
$conn = mysqli_connect('localhost', 'root', '', 'login_db');
session_start();
$user = $_SESSION['user'];
if(isset($_POST['wh']))
{
    $whID = mysqli_fetch_array($conn -> query("SELECT COUNT(*) FROM wh_form"))[0];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    if(!empty($weight))
    {
        $query = "UPDATE wh_form SET weight = $weight, height = $height WHERE uname = '$user'"; 
        if($conn -> query($query)){ 
            echo "<script> window.location.href = 'planner.php#fitness' </script> ";
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
    <link rel="stylesheet" href="planner.css">
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
    <title>Add To My List</title>
</head>
<body>
    <header>
        <nav>
            <ul class="nav-bar">
                <li class="logo"><a href="planner.php"><img src="images/logo.png" alt="logo" width="90"></a></li>
                <span class="menu">
                    <li><a class="active" href="planner.php#home">HOME</a></li>
                    <li><a href="planner.php#planner">PLANNER</a></li>
                    <li><a href="planner.php#to-do">TO-DO</a></li>
                    <li><a href="planner.php#my-list">MY LIST</a></li>
                    <li><a href="planner.php#fitness">FITNESS</a></li>
                    <li><a href="#">LOGOUT</a></li>                   
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </span>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
            </ul>
        </nav>
    </header>  


<div class="plan-wrapper">
    <section class="add-plan" id="add-plan">
        <div class="todo-container">
            <div class="title-box">
                <div class="plan-ctb-back">
                    <form method = 'post'>
                        <input type="submit" name="goBack" value="⬅"></form>
                    </form>
                    <?php
                    if(isset($_POST['goBack'])) { 
                        echo "<script> window.location.href = 'planner.php#fitness' </script>";
                     }
                    ?>
                </div>
                <div class="plan-ctb-title">
                <h1>Fitness</h1>
                </div>
            </div>              
                <div class="todo-add-content">
                    <form method='post'>
                        <div class="plan-content">
                            <div class="add-input-box">
                                <span class="add-details">Weight</span>
                                <input type="number" id="weight" name="weight" placeholder="Enter your weight in KG" required>   
                            </div>      
                            <div class="add-input-box">
                                <span class="add-details">Height</span>
                                <input type="number" id="height" name="height" placeholder="Enter your height in CM" required>   
                            </div>      
                        </div>
                        <div class="add-button">
                            <input type="submit" value="Update" name = "wh">
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>