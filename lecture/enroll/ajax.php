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
                <li><a  href="">Ajax</a></li>
                
          <img id="menu-btn" src="../../images/menu.png" alt=""  >
        </div>
    </nav>

     <!-- Courses -->
   
     <section id="video_page">
         <div class="con">
             <img src="../../images/course9.jpg" alt="">
            
            <div class="collapse">
                <a href="../video/ajax/chapter1.php"> Chapter 1 (PHP Ajax Introduction)</a>
            </div>
            <div class="collapse">
                <a href="../video/ajax/chapter2.php">Chapter 2 (Insert Rcords in Database)</a>
            </div>
            <div class="collapse">
                <a href="../video/ajax/chapter3.php">Chapter 3 (Delete Rcords from Database)</a>
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