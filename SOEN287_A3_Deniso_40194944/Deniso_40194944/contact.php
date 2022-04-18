<?php
$filename = "../contact.txt";
if(isset($_POST["name"]) && isset($_POST["email"]) 
&& isset($_POST["telnumber"]) && isset($_POST["subject"])){
    $conn = new mysqli("localhost", "root", "", "soen287_a3");
    if(mysqli_connect_errno()){
        die("1: Connection Failed"); // error code #1 = connection failed
    }

    $username = $_POST["name"];
    $email = $_POST["email"];
    $telnumber = $_POST["telnumber"];
    $subject = $_POST["subject"];
    
    // check if name exists
    $query = "INSERT INTO message(full_name, email, tel_number, message) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("ssss", $username, $email, $telnumber, $subject);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        
        <title>Contact</title>
    </head>

    <body>
        <div class="topnav">        
            <a href="home.php">Home</a>
            <a href="resume.php">Resume</a>
            <a href="projects.php">Projects</a>
            <a class="active" href="contact.php">Contact</a>
            <a href="social.php">Social</a>
            <a href="admin.php">Admin</a>
        </div>


        <h2>Contact Me!</h2>

        <div class="form-container">
            <form action="#" method="POST">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your name...">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email...">

                <label for="telnumber">Phone number</label>
                <input type="tel" id="telnumber" name="telnumber" placeholder="Your phone number...">

                <label for="subject">Message</label>
                <textarea id="subject" name="subject" placeholder="Enter your message here..." style="height:200px"></textarea>

                <input class="form-btn" type="submit" value="Send Message">
            </form>
        </div>
    </body>
</html>