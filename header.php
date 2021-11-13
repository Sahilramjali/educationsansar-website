<?php require_once "server.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="javascript/main.js" defer></script>
</head>
<body>
    <!--navigation bar-->
        <nav class="navbar">
            <div class="brand-title"><a href="index.php">Education Sansar</a></div>
            <a class="toggle-button"><!--when screen goes smaller then it work -->
                <span class="bar"></span><!--represent the hamburger menu of horizental line -->
               <span class="bar"></span> 
               <span class="bar"></span> 
            </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="event.php">Event</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if(isset($_SESSION['success'])){?>

                            <li><a href="logout.php"><input type="submit" name="submit" value="logout"></a></li>
                        <?php } else {?>
                                <li><a href="login.php">LogIn</a></li>
                                 <li><a href="register.php">Register</a></li>
                        <?php  }?>
    
                </ul>
            </div>
        </nav>

</body>
</html>
