<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="shortcut icon" href="images/favicon1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->
    <?php
        $selected = "blog";
        $current_id = ' class="active"';
        include "nav.php";
    ?>
    

    <!-- Home -->

    <section id="about-home">
        <h2>Blog</h2>
    </section>

    <section id="blog-container">
        <div class="blogs">
            <div class="post">
                <img src="images/blog1.jpg" alt="" >
                <h3>Learn Web Development In The Easiest Way</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eos ullam culpa sint dolore assumenda, ea sit rerum quisquam consequuntur?</p>
                <br>
                <a href="blog/post1.php">Read more</a>
            </div>

            <div class="post">
                <img src="images/blog2.jpg" alt="" >
                <h3>Learn Javascript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eos ullam culpa sint dolore assumenda, ea sit rerum quisquam consequuntur?</p>
                <br>
                <a href="blog/post2.php">Read more</a>
            </div>

            <div class="post">
                <img src="images/blog3.jpg" alt="" >
                <h3>Learn Boostrap</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eos ullam culpa sint dolore assumenda, ea sit rerum quisquam consequuntur?</p>
                <br>
                <a href="blog/post3.php">Read more</a>
            </div>

            <div class="post">
                <img src="images/blog4.jpg" alt="" >
                <h3>Learn PHP</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eos ullam culpa sint dolore assumenda, ea sit rerum quisquam consequuntur?</p>
                <br>
                <a href="blog/post4.php">Read more</a>
            </div>

            <div class="post">
                <img src="images/blog5.jpg" alt="" >
                <h3>Learn MySQL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eos ullam culpa sint dolore assumenda, ea sit rerum quisquam consequuntur?</p>
                <br>
                <a href="blog/post5.php">Read more</a>
            </div>
        </div>
        <div class="cato">
            <h2>Catogories</h2>
            <hr>
            <a href="#">Web Development</a>
            <hr>
            <a href="#">Web Design</a>
            <hr>
            <a href="#">App Development</a>
            <hr>
            <a href="#">Frontend Web</a>
            <hr>
            <a href="#">Python</a>
            <hr>
            <a href="#">Javascript</a>
            <hr>
        </div>
    </section>

   

   
    <!-- Footer -->

    <?php
    include "footer.php";
    ?>

</body>
</html>