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
                <li><a  href="">Bootstrap</a></li>
                
          <img id="menu-btn" src="../../images/menu.png" alt=""  >
        </div>
    </nav>

     <!-- Courses -->
   
     <section id="video_page">
         <div class="con">
             <img src="../../images/course5.jpg" alt="">
            
            <div class="collapse">
                <a href="../video/bootstrap/chapter1.php"> Chapter 1 (Bootstrap CSS Framework Introduction)</a>
            </div>
            <div class="collapse">
                <a href="../video/bootstrap/chapter2.php">Chapter 2 (CSS Framework Installation)</a>
            </div>
            <div class="collapse">
                <a href="../video/bootstrap/chapter3.php">Chapter 3 (CSS Container & Row Class)</a>
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