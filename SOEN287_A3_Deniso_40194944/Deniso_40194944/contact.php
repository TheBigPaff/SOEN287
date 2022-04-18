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
            <form action="#">
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