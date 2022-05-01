<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <link rel="stylesheet" href="../CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->

    <!-- <?php
        // $selected = "post1";
        // $current_id = ' class="active"';
        // include "../nav.php";
    ?> -->
    <nav>
       <a href="../index.php" class="logo"><h1>SKILL SHARP</h1></a>
        <div class="navigation">
            <ul class="ul">
                <i id="close-btn" class="fas fa-times"></i>
                <li><a  href="../index.php">Home</a></li>
                <li><a  href="../about.php">About</a></li>
                <li><a class="active" href="../blog.php">Blog</a></li>
                <li><a href="../course.php">courses</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
          <img id="menu-btn" src="../../images/menu.png" alt=""  >
        </div>
    </nav>


    
    <section id="blog-container">
        <div class="blogs blogpost">
            <div class="post">
                <img src="../images/blog1.jpg" alt="">
                <h3>Learn Web Development In The Easiest Way</h3>
                <p>How can I start learning web development? Is it easy? And how can I keep up with the latest web designing technologies?
                    <br>
                    These are the questions that appear in every beginner’s mind. There is also confusion between web designing and web development, but we’ll talk about web development.
                    <br><br>
                    It totally depends on how much you are interested in and are serious about it. if you desperately wanted to learn then you can easily be an expert on it. There’s nothing like it’s so hard or something like it’s so difficult to design websites like we use or look around our day-to-day life. e.g: Facebook, Google, Amazon, Flipkart, Snapdeal, and many more.
                    <br><br>
                    But if we really think about it, Scaring is natural, comes to mind when we look at it as a bunch of graphical elements like different colors, different kind of fonts, images, Card views, Tables, Animations, etc. and the most interesting one is the term called ‘Responsive’ websites, responsive websites are those websites which change it’s element’s alignments, spacing, etc according to the device it’s browsing.
                    <br><br>
                    But nowadays it’s not a very hard concept anymore, you can easily design your website responsive with the help of some predefined libraries, we have so many types of frameworks available for designing web sites and the best thing is that it’s all freely available to use, you just need to learn ‘How to use it’. Now if you are wondering about how to learn it then just don’t worry about it. I am sharing one of the best sources available on the Internet to learn all these things freely and easily, you just need to follow it and practice it own.
                    <br><br>
                    If you are reading this Blog then definitely you want to become a website developer, and if you really want to become a developer.
                    <br><br>
                    Waw! it’s really dame true, to learn website designing web is the best place you will ever have. It will be something like you no need to study theory concepts of something first then do the practice of that, what actually we all do during our academics. You will learn the concept with the whole details about the effect of that learning. You will see all different kinds of things that developed day by day and when you will observe it, you want to do it yourself which emphasis you to learn more day by day. You will be always engaged with the field you are working on. </p>
                    <a href="#">Read </a>
            </div>
        </div>
    </section>

   

   
    <!-- Footer -->

    <?php
    include "../footer.php";
    ?>

</body>
</html>