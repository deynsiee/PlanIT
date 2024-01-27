<?php
$conn = mysqli_connect('localhost', 'root', '', 'login_db');
session_start();
$user = $_SESSION['user'];
if(isset($_POST['plan']))
{
    $planID = mysqli_fetch_array($conn -> query("SELECT COUNT(*) FROM plan_form"))[0];
    $title = $_POST['title'];
    $d_date = $_POST['d_date'];
    $d_time = $_POST['d_time'];
    $note = $_POST['note'];

    if(!empty($title))
    {
        $query = "INSERT INTO plan_form(planID, uname, title, d_date, d_time, note,status) 
        VALUES ($planID, '$user', '$title', '$d_date', '$d_time', '$note',1)";

        if (mysqli_query($conn, $query)) {
            echo "<script> window.location.href = 'planner.php#planner' </script>";
        } else { 
            echo $conn -> error;
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
    <title>Add To Planner</title>
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
        <div class="container">
            <div class="title-box">
                <div class="plan-ctb-back">
                    <form method = "POST">
                        <input type="submit" name="goBack" value="⬅"></form>
                    </form>
                    <?php
                    if(isset($_POST['goBack'])) { 
                        echo "<script> window.location.href = 'planner.php#planner' </script>";
                     }
                    ?>
                </div>
                <div class="plan-ctb-title">
                <h1>Planner</h1>
                </div>
            </div>              
                <div class="planner-add-content">
                    <form method='post'>
                        <div class="plan-content">
                            <div class="add-input-box">
                                <span class="add-details">Title</span>
                                <input type="text" id="title" name="title" placeholder="Enter Title..." required>
                            </div>         
                            <div class="add-input-box">
                                <span class="add-details">Due Date</span>
                                <input type="date" id="d_date" name="d_date" required>
                            </div>         
                            <div class="add-input-box">
                                <span class="add-details">Due Time</span>
                                <input type="time" id="d_time" name="d_time" required>
                            </div>         
                            <div class="add-input-box">
                                <span class="add-details">Note</span>
                                <input type="text" id="note" name="note" placeholder="Note" required> 
                            </div>     
                        </div>
                        <div class="add-button">
                            <input type="submit" value="Plan It" name='plan'>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>