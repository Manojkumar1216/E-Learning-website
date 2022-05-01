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
                <li><a  href="">Advance Javascript</a></li>
                
          <img id="menu-btn" src="../../images/menu.png" alt=""  >
        </div>
    </nav>

    

     <!-- Courses -->
   
     <section id="video_page">
         <div class="con">
             <img src="../../images/course4.jpg" alt="">
            
            <div class="collapse">
                <a href="../video/adv_js/chapter1.php"> Chapter 1 (Advance JavaScript - Introduction)</a>
            </div>
            <div class="collapse">
                <a href="../video/adv_js/chapter2.php">Chapter 2 (Let & Const Variable)</a>
            </div>
            <div class="collapse">
                <a href="../video/adv_js/chapter3.php">Chapter 3 (Template Strings)</a>
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