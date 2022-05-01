
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NewsLetter </title>
    <link rel="stylesheet" href="../css/newsletter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  
  <div class="wrapper">
    <div class="icon"><i class="far fa-envelope"></i></div>

    <div class="content">
      <header>Become a Subscriber</header>
      <p>Subscribe to our blog and get the latest updates straight to your inbox.</p>
    </div>
    
    <form action="subscribe.php" method="POST">
    <?php 
      
      session_start(); 
      
      
      if
      (!isset($_SESSION["login"]))
      
        header("location: ../sign_in/login.php");
      
      include '../connection.php';
      

      $userEmail = ""; 
    if(isset($_POST['subscribe'])){ 
      $userEmail = $_POST['email']; 
      mysqli_query($conn,"INSERT INTO news_letter(email) VALUES('$userEmail')");

      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ 
        $subject = "Thanks for Subscribing us - $userEmail";
        $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share data to any one.";
        $sender = "From: skillsharp123@gmail.com";
        
        //php function to send mail
       
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing us." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          
          <div class="alert error-alert">
          <?php echo "Failed to send mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        
        <div class="alert error-alert">
          <?php echo "$userEmail is invalid Email!" ?>
        </div>
        <?php
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>

      </div>
    </form>
    <div class="text">We do not share your information to Anyone. </div>
  </div>

</body>
</html>   
