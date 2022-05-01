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
                <img src="../images/blog5.jpg" alt="">
                <h3>Learn MySQL</h3>
                <p>
                    MySQL is a popular database platform for businesses because it is extremely easy to use. It is commonly used in combination with PHP. You hear “it’s easy to work with” a lot in relation to computer languages, but MySQL truly is simple.
                    <br><br>
                    For instance, someone with little to no knowledge of MySQL can easily establish a database and activate a WordPress install, all manually. Of course, a lot of hosting providers make this process even simpler by handling all the necessary tasks for new website administrators, but it doesn’t detract from the point that MySQL is relatively easy to use.
                    <br><br>
                    Not to mention, there are a wide variety of tools that take advantage of MySQL, especially open-source e-commerce platforms like OsCommerce, Magento, Joomla, and more.
                    <br>
                    <h3> Some of the other advantages of working with MySQL include:</h3>

                    <div class="para">
                        <ul>
                            <li> MySQL is Secure: It uses solid data security layers to protect sensitive data from outside access. Individual rights can be set to provide multiple user levels, allowing several people access to stored data. All passwords used to access the MySQL database are encrypted.</li>
                            <li> MySQL is Inexpensive: Since the MySQL database software is free to download from the official portal, and comes included pre-installed on most hosting servers it’s not expensive to use or maintain.</li>
                            <li> MySQL Manages Memory: The database software has been shown to manage memory exceedingly well, and actually prevents memory leaks you might experience on a server where it’s not deployed.</li>
                            <li> MySQL is Heavily Supported: You can run the software on a variety of platforms and operating systems including Windows, Linux, Novell NetWare, UNIX (Sun Solaris, AIX, DEC UNIX), OS/2, FreeBSD and more.</li>
                            <li> MySQL is Fast: When compared to other database software like Sybase and Oracle, MySQL has fewer features to offer but this is good. It means that MySQL is much faster in terms of performance, and users still have access to all the necessary features they would through other database platforms.</li>
                            <li> MySQL Data Storage is Scalable: By default, MySQL can handle a total file size limit of about 4GB, however, this can be increased to meet your needs – by as much as 8TB of data.</li>
                            <li> MySQL Supports Novell Cluster Services: NetWare’s Novell Cluster Services offer a server-side database extension to protect your data in the event of a hardware failure. With your MySQL content stored on a Novell cluster, if one server fails, the software will take over on an alternate server – this keeps your website and applications running smoothly, with nary a hiccup. Your customers will never even notice that a server went down.</li>
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