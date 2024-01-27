<?php
$conn = mysqli_connect('localhost', 'root', '', 'login_db');
session_start();
$user = $_SESSION['user'];
$weight = mysqli_fetch_array($conn -> query("SELECT weight FROM wh_form WHERE uname = '$user'"))[0]; 

$height = mysqli_fetch_array($conn -> query("SELECT height FROM wh_form WHERE uname = '$user'"))[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---- FONT AWESOME--->
    <script src="https://kit.fontawesome.com/e8a4207e40.js" crossorigin="anonymous"></script>
    <!----CSS LINK---->
    <link rel="stylesheet" href="planner.css">
    <!---FONT LINK - POPPINS ---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <!----  WEBSITE TITLE ---->
    <title>PlanIT</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<!----BODY STARTS HERE ---->
<body>
<!---HEADER SECTION STARTS HERE --->
<header>
    <nav>
        <ul class="nav-bar">
            <li class="logo"><a href="planner.php"><img src="images/logo.png" alt="logo" width="90"></a></li>
            <span class="menu">
                <li><a class="active" href="#home">HOME</a></li>
                <li><a href="#planner">PLANNER</a></li>
                <li><a href="#to-do">TO-DO</a></li>
                <li><a href="#my-list">MY LIST</a></li>
                <li><a href="#fitness">FITNESS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>                   
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>
<!----HEADER SECTION ENDS HERE---->

<!---- HOME SECTION STARTS HERE ---->
<section class="home" id="home">
    <div class="content">
        <h1>WELCOME TO PLANIT!</h1>
        <p>Welcome to our comprehensive online planner, crafted to facilitate your organization and empower you to achieve your goals.<br> 
          Equipped with our fitness, planner, to-do, and my list features, you will have the tools necessary to seize control of your hectic<br>
          schedule and maximize your productivity every day.</p>      
        <a href="#planner"><button type="button" ><span></span>Go To Planner</button></a>
    </div>
</section>

<!----HOME SECTION ENDS HERE ---->

<!----PLANNER SECTION STARTS HERE ---->

<section class="planner" id="planner">
    <div class="section-title">
    <h1>PLANNER</h1>
    <a href="addplan.php"><button type="button">+ Add New Plan</button></a>
    </div>
    <div class="container-months">
    <div class="card">
                <div class="card-title">
                    <h2>JANUARY</h2>
                </div>
                <div class="card-items">
                        <?php
                        $month = '01'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>

        <div class="card">
                <div class="card-title">
                    <h2>FEBRUARY</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '02'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>MARCH</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '03'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>



        <div class="card">
                <div class="card-title">
                    <h2>APRIL</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '04'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>MAY</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '05'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>JUNE</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '06'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>JULY</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '07'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>AUGUST</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '08'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>SEPTEMBER</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '09'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>OCTOBER</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '10'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>NOVEMBER</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '11'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>


        <div class="card">
                <div class="card-title">
                    <h2>DECEMBER</h2>
                </div>
                <div class="card-items">
                <?php
                        $month = '12'; 
                        $plans = $conn -> query("SELECT * FROM plan_form WHERE uname='$user' AND status = 1 GROUP BY d_date"); 
                        if(!empty($plans)){ 
                                foreach($plans as $plan){
                                    $pmonth = explode("-",$plan['d_date']) [1] ;
                                    $pday = explode("-",$plan['d_date']) [2] ;
                                    if($pmonth == $month){ 
                                        $activity = $plan['title']; 
                                        $date = $plan['d_time'];
                                        echo "
                                        <div class='plan-item'>
                                        <div class='plan-item-box'>
                                            <h3> $pday <br> Time: $date <br> $activity</h3>
                                        </div>
                                        </div>";
                                    }
                                }
                        } 
                        ?>
                </div>
        </div>



    </div>

</section>

<!----PLANNER SECTION ENDS HERE ---->
<!----TO-DO SECTION STARTS HERE ---->
<section class="to-do" id="to-do">
    <div class="section-title">
        <h1>MY TO-DO LIST</h1>
        <a href="addtodo.php"><button type="button">+ Add Task</button></a>
    </div>
    <div class="to-do-items">
    <div class="todo-item-box">
                <div class="todo-dump">
                        <!--- papalitan --->
                        <?php
                        $todos = $conn -> query("SELECT * FROM todo_form WHERE uname = '$user' AND status = 1");
                            if(!empty($todos)){ 
                            foreach($todos as $todo){ 
                                $todotask = $todo['t_task']; 
                                $taskid = $todo['taskID'];
                                echo "  <div class='dump-item'>
                                <div class='dump-box'>
                                    <div class='db-title'>
                                            <h1>  $todotask </h1>
                                    </div>

                                    <div class='db-remove'>
                                            <form method = 'post'>
                                                <input type = 'text' name = 'taskid' value = '$taskid' id='taskid'>
                                                <input type = 'submit' name= 'removetodo' value = '❌'>
                                            </form>
                                    </div>
                                </div>
                    </div>";
                            }
                        }
                         

                        ?>
                           
                </div>
                <?php
                if(isset($_POST['removetodo'])) {
                    $todel = $_POST['taskid'];
                    $delque = "UPDATE  todo_form SET status = 0 WHERE taskID=$todel"; 
                    if($conn -> query($delque)){ 
                        echo "<script> window.location.href = 'todoupdated.php'</script>"; 
                    } 
                }
                
                ?>
    </div>
</div>


</section>
<!----TO-DO SECTION ENDS HERE ---->
<!----MY LIST SECTION STARTS HERE ---->
<section class="my-list" id="my-list">
    <div class="section-title">
        <h1>MY LIST</h1>
        <a href="addlist.php"><button type="button">+ Add To List</button></a>
    </div>
<div class="to-do-items">
    <div class="todo-item-box">
                <div class="todo-dump">
                        <!--- papalitan --->
                        <?php
                        $list = $conn -> query("SELECT * FROM list_form WHERE uname = '$user' AND status = 1");
                        if(!empty($list)){ 
                        foreach($list as $i){ 
                            $mlist = $i['m_list']; 
                            $listid = $i['listID'];
                            echo "  <div class='dump-item'>
                            <div class='dump-box'>
                                <div class='db-title'>
                                        <h1>  $mlist </h1>
                                </div>

                                <div class='db-remove'>
                                        <form method = 'post'>
                                            <input type = 'text' name = 'listid' value = '$listid' id='taskid'>
                                            <input type = 'submit' name= 'removelist' value = '❌'>
                                        </form>
                                </div>
                            </div>
                </div>";
                         }
                        } 
                         

                        ?>
                           
                </div>
                <?php
                if(isset($_POST['removelist'])) {
                    $todel = $_POST['listid'];
                    $delque = "UPDATE  list_form SET status = 0 WHERE listID=$todel"; 
                    if($conn -> query($delque)){ 
                        echo "<script> window.location.href = 'listupdated.php' </script>"; 
                    } 
                }
                
                ?>
    </div>

</section>
<!----MY LIST SECTION ENDS HERE --->
<!----ITNESS SECTION STARTS HERE --->
<section class="fitness" id="fitness">
<div class = "cw">
    <div class="cw-row">
                <h3> Current Weight: <?php if($weight!=0) {echo "$weight kg";} else { echo "NOT SET";}?></h3>
    </div>
    <div class="cw-row">
    <h3> Current hEIGHT: <?php if($height!=0) {echo "$height cm";} else { echo "NOT SET";}?></h3>
    </div>
    </div>  
<div class="section-title">
        <h1>FITNESS</h1>
        <a href="addfitness.php"><button type="button">+ Add Fitness Plan</button></a>
        <a href="wh.php"><button type="button">+ Update Weight & Height</button></a>
    </div>
    <div class="to-do-items">
  
    <div class="todo-item-box">
                <div class="todo-dump">
                        <!--- papalitan --->
                        <?php
                        
                        $fitness = $conn -> query("SELECT * FROM fitness_form WHERE uname = '$user' AND status = 1");
                        if(!empty($fitness)){ 
                        foreach($fitness as $j){ 
                            $rate = $j['activity_rate']; 
                            $fitnessid = $j['fitnessID'];
                            $date = $j['p_date'];
                            $tgoal = $j['target_goal'];
                            echo "  <div class='dump-item'>
                            <div class='dump-box'>
                                <div class='db-title'>
                                        <h1>  $date <br> $rate - $tgoal </h1>
                                </div>

                                <div class='db-remove'>
                                        <form method = 'post'>
                                            <input type = 'text' name = 'fitnessid' value = '$fitnessid' id='taskid'>
                                            <input type = 'submit' name= 'removefitness' value = '❌'>
                                        </form>
                                </div>
                            </div>
                </div>";
                         }
                        }
                        ?>
                           
                </div>
                <?php
                if(isset($_POST['removefitness'])) {
                    $todel = $_POST['fitnessid'];
                    $delque = "UPDATE fitness_form SET status = 0 WHERE fitnessID=$todel"; 
                    if($conn -> query($delque)){ 
                        echo "<script> window.location.href = 'fitnessupdated.php' </script>"; 
                    } 
                }
                
                ?>
    </div>
</section>
    
<!----FITNESS SECTION ENDS HERE --->
<!----FOOTER SECTION STARTS HERE --->
<section class="footer" id="footer">
    <div class="footer-col">
        <ul class="footer-nav">
            <li><a href="#fitness">FITNESS</a></li>
            <li><a href="#my-list">MY LIST</a></li>
            <li><a href="#to-do">TO-DO</a></li>
            <li><a class="active" href="#planner">PLANNER</a></li>
            <li><a href="#home">HOME</a></li>
        </ul>
        <h3>PLANIT</h3>
        <p>Stay Ahead and Set Your Goals. Plan It!</p>
        <ul class="footer-socials">
            <li><a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></li>           
            <li><a href="#"><i class="fa-brands fa-twitter fa-lg"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-wordpress fa-lg"></i></a></li>
        </ul>
    </div>
</section>
<!----FOOTER SECTION ENDS HERE --->
</body>
</html>