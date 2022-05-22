<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
    <link rel="shortcut icon" href="images/favicon1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->

    <?php
        $selected = "courses";
        $current_id = ' class="active"';
        include "nav.php";
    ?>

    <!-- Home -->

    <section id="about-home">
        <h2>Enroll Our Popular Courses And Skill Up</h2>
    </section>

     <!-- Courses -->

     <section id="course">
        <h1>Our Popular Courses</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, corrupti.</p>
        <div class="course-box">
            <div onclick="window.location.href='course/JS-course.php';" class="courses">
                <img src="images/course1.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>Javascript</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/html-course.php';" class="courses">
                <img src="images/course2.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>HTML </h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/css-course.php';" class="courses">
                <img src="images/course3.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>CSS</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/adv_JS-course.php';" class="courses">
                <img src="images/course4.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>Advanced Javascript</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/bootstrap-course.php';" class="courses">
                <img src="images/course5.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>Boostrap</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/mysql-course.php';" class="courses">
                <img src="images/course6.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>MySQL</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/php-course.php';" class="courses">
                <img src="images/course7.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>PHP</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/sass-course.php';" class="courses">
                <img src="images/course8.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>SASS</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/ajax-course.php';" class="courses">
                <img src="images/course9.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>Ajax</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/jquery-course.php';" class="courses">
                <img src="images/course10.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>jQUERY</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>
        </div>
    </section>

   
    <!-- Footer -->

    <?php
    include "footer.php";
    ?>

</body>
</html>