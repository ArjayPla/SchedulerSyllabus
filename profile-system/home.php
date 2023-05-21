<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

     <header>
          <nav>
               <ul> 
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="scheduler.php">SCHEDULER</a></li>
                    <li><a href="syllabus.php">SYLLABUS</a></li>
                    <li><a href="schedule.php">MY SCHEDULE</a></li>
                    <li><a href="logout.php">LOGOUT</a></li> 
               </ul>
           </nav>
     </header>
     
     <div class="greet">  
          <h1>
               Welcome to Cainta Catholic College's <br> Scheduler and Syllabus Manager
          </h1>
     </div>  

     <container class="body">
          <div class="overview">
                    <h2>
                         Overview
                    </h2>
                    <p>This system is created to resolve the problem of the College Department prior to Subject Syllabus management and Class Scheduler. <br> Users has an option to submit and check schedules, search and download Subject Syllabus and also change the User's registered information.</p>
          </div>

          <div class="purpose">
                    <h2>
                         Purpose
                    </h2>
                    <p>The System has the main purpose of Generating a precise and correct Scheduler for every departments under College Department. <br> Other than that, this system also manages Subject Syllabus for the school to be used for anytime.</p>
          </div>
     </container>

     <div class="redirect">
          <a class="sched" href="scheduler.php"><button>SCHEDULE NOW</button></a>
          <a class="sylla" href="syllabus.php"><button>VIEW SYLLABUS</button></a>
     </div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>