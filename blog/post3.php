<!DOCTYPE html>
<html lang="en">
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
           <img id="menu-btn" src="../images/menu.png" alt=""  >
         </div>
     </nav>

    
    <section id="blog-container">
        <div class="blogs blogpost">
            <div class="post">
                <img src="../images/blog3.jpg" alt="">
                <h3>Learn Boostrap</h3>
                <p>Why you should learn Bootstrap?
                    <br>
                
                <div class="para">
                    <ul>
                        <li> Time: Bootstrap saves you a lot of time. You don’t have to worry about creating bespoke code for your site’s layout. You also rarely have to switch between your HTML and CSS files which adds up.</li>
                         
                        <li> Consistency: CSS frameworks offer a consistent approach across all projects, platforms, and browsers. You get the same results in Firefox as you do in Chrome.</li>
                         
                        <li> Responsiveness: Bootstrap offers responsive design out of the box. So you don’t have to worry about manually coding all the different breakpoints.</li>
                         
                        <li> JavaScript: It uses jQuery to interact with your HTML. For beginners, it means you avoid having to code a lot of different features. They handle it for you.</li>
                         
                        <li> Community Support: Community support alone means you should learn Bootstrap. It is exceptionally well documented and the chances are that someone has already run into the problem you are facing.</li>
                        
                        <li> Focus: Learning Bootstrap will allow you to focus on the functionality of your website. Rather than getting caught up trying to get images to align properly, you can start coding other cool plugins.</li>
                         
                        <li> Customizable: Thanks to theming you can modify Bootstrap to your heart’s content. You can inherit the things you like and completely change the things you don’t. For devs looking for a solid platform to start on, it’s hard to beat.</li>
                     </ul>
                </div>    
                    
                </p>
            </div>
        </div>
    </section>

   

   
    <!-- Footer -->

    <?php
    include "../footer.php";
    ?>

</body>
</html>