<?php
$conn = mysqli_connect('localhost', 'root', '', 'login_db');
session_start();
$user = $_SESSION['user'];
if(isset($_POST['fitness']))
{
    $fitnessID = mysqli_fetch_array($conn -> query("SELECT COUNT(*) FROM fitness_form"))[0];
    $p_date = $_POST['p_date'];
    $p_time = $_POST['p_time'];
    $activity_rate = $_POST['activity_rate'];
    $target_goal = $_POST['target_goal'];
    $t_task = $_POST['t_task'];

    if(!empty($activity_rate))
    {
        $query = "INSERT INTO fitness_form(fitnessID, uname, p_date, p_time, activity_rate, target_goal, t_task,status)
        VALUES ($fitnessID, '$user', '$p_date', '$p_time', '$activity_rate', '$target_goal', '$t_task',1)";

if (mysqli_query($conn, $query)) {
    echo "<script> window.location.href = 'planner.php#fitness' </script>";
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
    <title>Fitness</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
        <div class="fitness-container">
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
                <div class="fitness-add-content">
                    <form method = 'post'>
                        <div class="plan-content">
                            <div class="add-input-box">
                                <span class="add-details">Date</span>
                                <input type="date" id="p_date" name="p_date" required>                             
                            </div>         
                            <div class="add-input-box">
                                <span class="add-details">Time</span>
                                <input type="time" id="p_time" name="p_time" required>
                            </div>         
                            <div class="add-input-box">
                                <span class="add-details">Activity Rate</span>
                                <input type="text" id="activity_rate" name="activity_rate" placeholder="Activity Rate" required>               
                            </div>         
                            <div class="add-input-box">
                                <span class="add-details">Target Goal</span>
                                <input type="text" id="target_goal" name="target_goal" placeholder="Target Goal" required>
                            </div>   
                            <div class="add-input-box">
                                <span class="add-details">Description</span>
                                <input type="text" id="t_task" name="t_task" placeholder="Description" required>
                            </div>       
                        </div>
                        <div class="fitness-add-button">
                            <input type="submit" value="Add Fitness Plan" name='fitness'>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>