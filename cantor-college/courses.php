<?php
require_once("php-includes\config.php");
$queryComputerCourses = "SELECT CourseTitle, CourseType, CourseSummary, CourseAwardName, UcasCode, UcasPoints, YearOfEntry, ModeOfAttendance, StudyLength, HasFoundationYear FROM courses WHERE CourseSubject = 'Computing'";
$resultsComputerCourses = $mysqli->query($queryComputerCourses);
$queryDesignCourses = "SELECT CourseTitle, CourseType, CourseSummary, CourseAwardName, UcasCode, UcasPoints, YearOfEntry, ModeOfAttendance, StudyLength, HasFoundationYear FROM courses WHERE CourseSubject = 'Art and design'";
$resultsDesignCourses = $mysqli->query($queryDesignCourses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantor College | Courses</title>
    <meta name="viewport" content="width=device-width", intial-scale=1.0>
    <link href="css\mobile.css" rel="stylesheet"> 
    <link media="only screen and (min-width:720px)" href="css\mobilelarger.css" rel="stylesheet">
    <link media="only screen and (min-width:1027px)" href="css/desktop.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <header>
        <?php
        include("php-includes\header.php");
        ?>
    </header>
    <main>
        <div class="Style2">
            <h1>Courses</h1>
            <div>
                <h2>Computing Courses</h2>
                <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.</p>
                <p>The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including computer science, software development, information systems, networking and software engineering. It is at the heart of a passionate computing community, including student societies devoted to games development, digital forensics and programming.</p>
                <p>The courses are British Computer Society accredited and are highly relevant to modern industry. They are designed to prepare students for professional occupations in Computing and related fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
            </div>
            <button id="CompButton">Show Courses</button>
            <?php
            while ($objComp = $resultsComputerCourses->fetch_object()){
                echo "<div class=\"DataOff\" id=\"Comp\">";
                echo "<table>";
                echo "<tr>";
                echo "<th id=\"title\">Title</th>";
                echo "<th id=\"type\">Type</th>";
                echo "<th id=\"award\">Award</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td headers=\"title\">$objComp->CourseTitle</td>";
                echo "<td headers=\"type\">$objComp->CourseType </td>";
                echo "<td headers=\"award\">$objComp->CourseAwardName</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th id=\"ucasCode\">Ucas Code</th>";
                echo "<th id=\"ucasPoints\">Ucas Points</th>";
                echo "<th id=\"foundationYear\">Foundation Year</th>";
                echo "</tr>";
                echo "<tr>";
                if ($objComp->UcasCode == NULL){
                    echo "<td headers=\"ucasCode\">n/a</td>";
                }
                else{
                    echo "<td headers=\"ucasCode\">$objComp->UcasCode</td>";
                }
                if ($objComp->UcasPoints == NULL){
                    echo "<td headers=\"ucasPoints\">n/a</td>";
                }
                else{
                    echo "<td headers=\"ucasPoints\">$objComp->UcasPoints</td>";
                }
                if ($objComp->HasFoundationYear === "1"){
                    echo "<td headers=\"foundationYear\">true</td>";
                }
                else{
                    echo "<td headers=\"foundationYear\">false</td>";
                }
                echo "</tr>";
                echo "<tr>";
                echo "<th id=\"yearOfEntry\">Year Of Entry</th>";
                echo "<th id=\"attendance\">Attendance</th>";
                echo "<th id=\"studyLength\">Study Length</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td headers=\"yearOfEntry\">$objComp->YearOfEntry</td>";
                echo "<td headers=\"attendance\">$objComp->ModeOfAttendance</td>";
                echo "<td headers=\"studyLength\">$objComp->StudyLength</td>";
                echo "</tr>";
                echo "</table>";
                echo "<div id=\"CourseSumStyle\">";
                echo "<h3>Course Summary</h3>";
                echo "<p>$objComp->CourseSummary</p>";
                echo "</div>";
                echo "</div>";
            }
            ?>
            <div>
                <h2>Design Courses</h2>
                <p>The College is an internationally connected creative community of diverse disciplines housed under one roof. We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
                <p>The College's art and design courses don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.</p>
                <p>You’ll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.</p>
            </div>
            <button id="DesignButton">Show Courses</button>
            <?php
            while ($objDesign = $resultsDesignCourses->fetch_object()){
                echo "<div class=\"DataOff\" id=\"Design\">";
                echo "<table>";
                echo "<tr>";
                echo "<th id=\"title\">Title</th>";
                echo "<th id=\"type\">Type</th>";
                echo "<th id=\"award\">Award</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td headers=\"title\">$objDesign->CourseTitle</td>";
                echo "<td headers=\"type\">$objDesign->CourseType </td>";
                echo "<td headers=\"award\">$objDesign->CourseAwardName</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th id=\"ucasCode\">Ucas Code</th>";
                echo "<th id=\"ucasPoints\">Ucas Points</th>";
                echo "<th id=\"foundationYear\">Foundation Year</th>";
                echo "</tr>";
                echo "<tr>";
                if ($objDesign->UcasCode == NULL){
                    echo "<td headers=\"ucasCode\">n/a</td>";
                }
                else{
                    echo "<td headers=\"ucasCode\">$objDesign->UcasCode</td>";
                }
                if ($objDesign->UcasPoints == NULL){
                    echo "<td headers=\"ucasPoints\">n/a</td>";
                }
                else{
                    echo "<td headers=\"ucasPoints\">$objDesign->UcasPoints</td>";
                }
                if ($objDesign->HasFoundationYear === "1"){
                    echo "<td headers=\"foundationYear\">true</td>";
                }
                else{
                    echo "<td headers=\"foundationYear\">false</td>";
                }
                echo "</tr>";
                echo "<tr>";
                echo "<th id=\"yearOfEntry\">Year Of Entry</th>";
                echo "<th id=\"attendance\">Attendance</th>";
                echo "<th id=\"studyLength\">Study Length</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td headers=\"yearOfEntry\">$objDesign->YearOfEntry</td>";
                echo "<td headers=\"attendance\">$objDesign->ModeOfAttendance</td>";
                echo "<td headers=\"studyLength\">$objDesign->StudyLength</td>";
                echo "</tr>";
                echo "</table>";
                echo "<div id=\"CourseSumStyle\">";
                echo "<h3>Course Summary</h3>";
                echo "<p>$objDesign->CourseSummary</p>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </main>
    <footer>
        <?php
        include("php-includes\\footer.php");
        ?>
    </footer>
    </div>
    <script src="javascript\courseDisplay.js"></script>
    <script src="javascript\navbar.js"></script>
</body>
</html>