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
   <?php include('header.php');?><!--include header.php in this page-->
   <h2 style="text-align:center;margin-top:5%">Courses</h2>
   <div class="container-of-course">
   
        <div class="course-container">
            <a href="course.php"><img src="images/web21.jpg" >           
           <div class="topic">
               <h3 >Web Development</h3>
           </div>
            </a>
        </div>
        
        <div class="course-container">
        <a href="course.php"><img src="images/apps.jpg" >           
           <div class="topic">
               <h3 >App development</h3>
           </div>
           </a>
        </div>
        
        <div class="course-container">
        <a href="course.php"><img src="images/mores.png" >           
           <div class="topic">
               <h3 >more courses</h3>
           </div>
           </a>
        </div>
       
       
   </div>
   <!--what people says portion-->

   <div class="saying-title">
   <h2>What Students Say</h2>
   </div>

   <div class="saying">
   
       <div class="student-saying">
           <img src="images/bipinc.jpg">
           <span >"Bipin Gurung"</span>
           <div class="student-feedback">
               <p>"This website made me learn nothing to something in my career of web development."</P>
            </div>
        </div>

        <div class="student-saying">
           <img src="images/pushpa.jpg">
           <span>"Pushpa Lama"</span>
           <div class="student-feedback">
               <p>"Trust me guys,This website let u learn free and make you earn."</P>
            </div>

        </div>
        <div class="student-saying">
           <img src="images/sak.jpg">
           <span>"Saksham KC "</span>
           <div class="student-feedback">
               <p>"This website made me learn nothing to something in my career of web development."</P>
            </div>

        </div>


    </div> 

   <?php include('footer.php');?><!--include footer.php in this page-->
</body>
</html>