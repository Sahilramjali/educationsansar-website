<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Sansar</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="javascript/main.js" defer></script>
</head>
<body>
    <!--footer area-->
    <footer>
        <!--upper footer area-->
        <!--first footer-->
        <div class="FooterContent">
            <div class="FooterSection About">
                <h2>Contact Us</h2>
                <p><i class="fa fa-map-marker" style="color:white"></i> Putalisadk,Kathmandu,Nepal</p>
                <p><i class="fa fa-phone" style="color:white"></i>&nbsp;+977-01-520345, +9779867704854</p> 
               
            </div>
            <!--second footer-->
            <div class="FooterSection Products">
                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provides</h2>
                <ul>
                    <li>Online learning</li>
                    <li>web designing</li>
                    <li>Programming language tutorials</li>
                    <li>Photography</li>
                    <li>Hardware</li>
                    <li>Help and support</li>
                    <li></li>
                </ul>

            </div>
            <!--third footer-->
            <div class="FooterSection Links">
                <h2>Quick links </h2>
               <a href="gallary.html">Gallary</a><br>
               <a href="about.html">About us</a><br>
               <a href="contact.html">Contact us</a><br>
               <a href="course.html">Courses</a><br>
               <a href="event.html">Events</a><br>
               <a href="news.html">News</a><br>
            </div>
            <!--fourth footer-->
            <div class="FooterSection Feedback">
                <h2>Feedback</h2>
                <form action="index.html" method="POST">
                    <input type="email" name="email" class="ContactInput" placeholder="Enter your email..."><br>
                     <textarea name="message" class="ContactInput" placeholder="your message..." rows="2" cols="2"></textarea><br>
                     <input type="submit" value="send" class="ContactSubmit" id="submit-feedback" onclick="openmodal()">
                </form>
            </div>
        </div>
        <!--creating pop up message when it click submit button-->
        <div class="popup-message" id="modal">
            <div class="modal-content" id="modal">
                <span class="closebtn" id="close-btn">&times;</span>
                <h2>Thank you!<br/>Safe surfing</h2>
            </div>

        </div>
        <!--bottom footer area-->
        <div class="FooterBottom">
            &copy; creative work 2020. | Designed by creative group of Education Sansar.
        </div>
    </footer>

</body>
</html>  