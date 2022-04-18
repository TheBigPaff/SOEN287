<?php
    include_once "../utils.php";
    $contents = getResume();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">

        <title>Resume</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="home.php">Home</a>
            <a class="active" href="resume.php">Resume</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="social.php">Social</a>
            <a href="admin.php">Admin</a>
        </div>
        <!-- chronological list depicting my education and respective qualifications obtained
        list left-aligned with respect to the webpage layout -->
        
        <div class="body">
            <h2>Education & Respective qualifications</h2>
            <dl class="education-list"> 
                <?php
                    echo $contents[0];
                ?>
            </dl>
            
            <!-- left-aligned list of professional and technical skills -->
            <h2>Professional & Technical skills</h2>
            <dl class="skills-list">
                <?php
                    echo $contents[1];
                ?>
            </dl>
            
            <h2>Awards & Recognition</h2>
            <!-- left-aligned list of my awards and recognition -->
            <ol class="awards-list">
                <?php
                    echo $contents[2];
                ?>
            </ol>
            
            <h2>Work Experience</h2>
            <!-- left-aligned list of work experiences -->
            <ol class="work-experience-list">
                <?php
                    echo $contents[3];
                ?>
            </ol>
            
            <h2>Referees</h2>
            <!-- left-aligned list of my referees for reference purposes. -->
            <ul class="referees-list">
                <?php
                    echo $contents[4];
                ?>
            </ul>
            
            <br>
            <!-- conspicouous button labeled "Download Full CV" -->
            <div class="form-btn-container">
                <button class="form-btn"> Download Full CV </button>
            </div>
        </div>

    </body>
</html>