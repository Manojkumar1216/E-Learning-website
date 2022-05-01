
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>
<body>
    <!-- navbar -->

    <nav>
       <a href="index.php" class="logo"><h1>SKILL SHARP</h1></a>
        <div class="navigation">
            <ul class="ul">
                <i id="close-btn" class="fas fa-times"></i>
                <li><a <?php if ($selected == "index") print $current_id; ?> href="index.php">Home</a></li>
                <li><a <?php if ($selected == "about") print $current_id; ?> href="about.php">About</a></li>
                <li><a <?php if ($selected == "blog") print $current_id; ?> href="blog.php">Blog</a></li>
                <li><a <?php if ($selected == "courses") print $current_id; ?> href="course.php">courses</a></li>
                <li><a <?php if ($selected == "contact") print $current_id; ?> href="contact.php">Contact</a></li>
                <?php if(isset($_SESSION['login'])){ ?>
                <div class="register">
                    <a href="sign_in/logout.php">Logout</a>
                </div>
                <?php }else{ ?>
                <div class="register">
                    <a href="sign_in/login.php">Login</a>
                </div>
                <?php } ?>
            </ul>
            
          <img id="menu-btn" src="images/menu.png" alt="" >
        </div>
    </nav>
    
</body>
</html>



