<!DOCTYPE html>
<html lang="en">
<?php
    
    include "se-c.php";
    
    ?>
    
<body>
    <!-- navbar -->

    <nav>
       <a href="../../index.php" class="logo"><h1>SKILL SHARP</h1></a>
        <div class="navigation">
            <ul class="ul">
                <i id="close-btn" class="fas fa-times"></i>
                <li><a  href="../../course.php">Courses</a></li>
                <li><a  href="">Sass</a></li>
                
          <img id="menu-btn" src="../../images/menu.png" alt=""  >
        </div>
    </nav>

     <!-- Courses -->
   
     <section id="video_page">
         <div class="con">
             <img src="../../images/course8.jpg" alt="">
            
            <div class="collapse">
                <a href="../video/sass/chapter1.php"> Chapter 1 (Sass Introduction)</a>
            </div>
            <div class="collapse">
                <a href="../video/sass/chapter2.php">Chapter 2 (Variables)</a>
            </div>
            <div class="collapse">
                <a href="../video/sass/chapter3.php">Chapter 3 (Nesting)</a>
            </div>

            </div>
         </div>
     </section>
   
   
    <!-- Footer -->


   <?php

     include "../../footer.php";

   ?>

</body>
</html>