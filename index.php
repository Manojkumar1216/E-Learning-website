<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->

        <?php
        $selected = "index";
        $current_id = ' class="active"';
        include "nav.php";
    ?>

    <!-- Home -->

    <section id="home">
        <h2>Enhance Your Future With SkillSharp</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur iste nemo ipsa eius dolore error quaerat quidem dignissimos iure?</p>
        <div class="btn">
            <a href="" class="blue">Learn more</a>
            <a href="course.php" class="yellow">Visit Courses</a>
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

    <!-- Courses -->

    <section id="course">
        <h1>Our Popular Courses</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, corrupti.</p>
        <div class="course-box">
            <div onclick="window.location.href='course/JS-course.php';" class="courses">
                <img src="images/course1.jpg" alt="#">
                <div  class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>Javascript</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>

            <div onclick="window.location.href='course/HTML-course.php';" class="courses">
                <img src="images/course2.jpg" alt="#">
                <div class="details">
                    <span>Updated 21/8/2021</span>
                    <h6>HTML</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
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
                        <i class="far fa-star"></i>
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
                        <i class="far fa-star"></i>
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
                        <i class="far fa-star"></i>
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
                        <i class="far fa-star"></i>
                        <span>(220)</span>
                    </div>
                </div>
                <div class="cost">
                    Rs.499
                </div>
            </div>
        </div>
    </section>

    <!-- Registration -->

    <section id="registration">
        <div class="reminder">
            <p>Get 100 online courses for free</p>
            <h1>Register To Get It</h1>
            <div class="time">
                <div class="date">
                    18 <br> Days
                </div>
                <div class="date">
                    23 <br> Hours
                </div>
                <div class="date">
                    08 <br> mins
                </div>
                <div class="date">
                    29 <br> sec
                </div>
            </div>
        </div>

        </div>
    </section>

    <!-- Profile -->

    <section id="faculty">
        <h1>Community Experts</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, magnam!</p>
        <div class="faculty-box">
            <div class="profile">
                <img src="images/faculty3.jpg" alt="" width="50%" >
                <h6>Anna </h6>
                <p></p>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="images/faculty2.jpg" alt="" width="50%" >
                <h6>Yahoo Baba </h6>
                <p></p>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="images/faculty1.jpg" alt="" width="50%" >
                <h6>John</h6>
                <p></p>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
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