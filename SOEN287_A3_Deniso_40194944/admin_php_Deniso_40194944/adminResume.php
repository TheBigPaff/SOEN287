<?php
session_start();
$filename = "../resume.txt";

if(!isset($_SESSION["admin"])){
    header("Location:/Deniso_40194944/admin.php");
}
if(isset($_POST["qualifications"]) 
    && isset($_POST["skill_set"])
    && isset($_POST["awards"])
    && isset($_POST["work_experience"])
    && isset($_POST["referees"])){
    $sep="\\|";
    file_put_contents($filename, $_POST["qualifications"] . $sep . $_POST["skill_set"]
                        . $sep . $_POST["awards"] . $sep . $_POST["work_experience"] 
                        . $sep . $_POST["referees"]);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script> 

        <title>Resume</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="adminIndex.php">Home</a>
            <a class="active" href="adminResume.php">Resume</a>
            <a href="adminProjects.php">Projects</a>
            <a href="adminContact.php">Contact</a>
            <a href="adminSocial.php">Social</a>
            <a href="logout.php">Logout</a>
        </div>
        <!-- chronological list depicting my education and respective qualifications obtained
        list left-aligned with respect to the webpage layout -->
        
        <h1>Admin - Resume</h1>
        <h3 style="font-style: italic;">(content displayed on resume.html)</h3>
        <div class="form-container">
            <form action="#" method="POST">
                <label for="qualifications">Educational Qualifications</label>
                <textarea id="qualifications" name="qualifications" placeholder="Educational Qualifications..."></textarea>

                <label for="skill_set">Skill Set</label>
                <textarea id="skill_set" name="skill_set" placeholder="Skill Set..."></textarea>

                <label for="awards">Awards/Recognition</label>
                <textarea id="awards" name="awards" placeholder="Awards/Recognition..."></textarea>

                <label for="work_experience">Work Experience</label>
                <textarea id="work_experience" name="work_experience" placeholder="Work Experience..."></textarea>
                
                <label for="referees">Referees</label>
                <textarea id="referees" name="referees" placeholder="Referees..."></textarea>

                <input class="form-btn" type="submit" value="Submit"/>
            </form>
        </div>

    </body>
</html>