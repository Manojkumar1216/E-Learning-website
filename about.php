<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="shortcut icon" href="images/favicon1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="../css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->

    <?php
    $selected = "about";
    $current_id = ' class="active"';
    include "nav.php";
?>

    <!-- Home -->

    <section id="about-home">
        <h2>About SKILL SHARP</h2>
    </section>

    <section id="about-container">
        <div class="about-img">
            <img src="images/about.png" alt="" width="100%">
        </div>

        <div class="about-text">
            <h2>Welcome to SkillSharp,Enhance your skills with best,online courses</h2>
            <p>You can start and finish one of these popular courses in under a day - for free! check out the list below... Take the course for free</p>
            <div class="about-fe">
                <img src="images/about-fe.jpg" alt="" width="20%">
                <div class="fe-text">
                <h5>200+ Courses</h5>
                <p>You can learn one of these course in our site</p>
                </div>
            </div>
            <div class="about-fe">
                <img src="images/about-fe.jpg" alt="" width="20%">
                <div class="fe-text">
                    <h5>200+ Courses</h5>
                    <p>You can learn one of these course in our site</p>
                    </div>
            </div>
        </div>
    </section>

    <!-- features -->

    <section id="features">
        <h1>Awesome Features</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ab.</p>
        <div class="fea-base">
        <div class="fea-box">
            <i class="fas fa-graduation-cap"></i>
            <h3>Scholarship Facility</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>

        <div class="fea-box">
            <i class="fas fa-file-certificate"></i>
            <h3>Online Courses</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>

        <div class="fea-box">
            <i class="fas fa-award"></i>
            <h3>Global certificate</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    </section>

    <section id="trust">
        <h1>Trusted By</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, temporibus?</p>
        <div class="trust-img">
            <img src="images/university1.png" alt="" >
            <img src="images/university2.png" alt="" >
            <img src="images/university3.png" alt="" >
            <img src="images/university4.png" alt="" >
            <img src="images/university5.png" alt="" >
            <img src="images/university6.png" alt="" >
        </div>
    </section>

   
    <!-- Footer -->

    <?php
    include "footer.php";
    ?>
</body>
</html>