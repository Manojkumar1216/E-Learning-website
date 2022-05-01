<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
    <link rel="stylesheet" href="../../../CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->

    <nav>
       <a href="../../../index.php" class="logo"><h1>SKILL SHARP</h1></a>
        <div class="navigation">
            <ul class="ul">
                <i id="close-btn" class="fas fa-times"></i>
                <li><a  href="../../enroll/js.php">Home</a></li>
                <li><a  href="">Javascript</a></li>
                
          <img id="menu-btn" src="../../../images/menu.png" alt=""  >
        </div>
    </nav>

    <!-- Home -->
    

    <div class="video_container">
        
        <div class="videos">
            <h1 class="heading">Javascript Course</h1>
            <div class="vid">
            <iframe width="800" height="400" src="https://www.youtube.com/embed/Lgxgm-T9cgA?modestbranding=1&autoplay=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                <h3>Javascript</h3>
                <p>Chapter 1 (Introduction to Java Programming) </p>
            </div>
        </div>

        <div class="next">
            <div class="ch">
                <a href="../js/chapter2.php">Chapter 2 (JavaScript Implementation)</a>
            </div>
            
            <div class="ch">
                <a href="../js/chapter3.php">Chapter 3 (Add Html Tags in JavaScript)</a>
            </div>
        </div>



        


    </div>

   
    <!-- Footer -->

    <?php

    include "../../../footer.php";

    ?>

</body>
</html>