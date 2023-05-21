<!DOCTYPE html>
<html>
<head>
	<title>Syllabus</title>
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
     
     <h1>
          Syllabus Finder
     </h1>


     <container class="syllabusContainer">
          <form action="/action_page.php">
               <label for="schoolYear">School Year:</label> <br>
               <select id="schoolYear" name="schoolYear">
                    <option value="firstYear">1st Year</option>
                    <option value="secondYear">2nd Year</option>
                    <option value="thirdYear">3rd Year</option>
                    <option value="fourthYear">4th Year</option>
               </select> <br>
               <label for="semester">Semester:</label> <br>
               <select id="semester" name="semester">
                    <option value="firstSem">1st Semester</option>
                    <option value="secondSem">2nd Semester</option>
               </select> <br>
               <label for="subject">Subject:</label> <br>
               <select id="subject" name="subject">
                    <option value="Math">Math</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
               </select> <br>
               <input type="Submit">
          </form>
     </container>
     
</body>
</html>