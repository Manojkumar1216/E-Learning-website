<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="../css/signup.css" />
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="signup_action.php" method="POST">
        
            <div class="text">
                
                <input name="name" type="text" placeholder="Enter your name" required>
            </div>
            <div class="text">
                
                <input name="email" type="email" placeholder="Enter your email" required>
            </div>
            <div class="text">
                
                <input name="password" type="password" placeholder="Create your password" required>
            </div>
            <div class="text">
                <input type="password" id="psw" name="cpassword" placeholder="Confirm your password" required>
            </div>
            <div>
                
<?php

if (isset($_POST['submit'])) {
  $secret = "6LeKoP8eAAAAAEkf6WIK8C5pSs8V_Fp6weQAyZf_";
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
  $data = file_get_contents($url);
  $row = json_decode($data, true);


 }

?>

  <!-- Google Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
    <h5> please fill the Captcha</h5>
    <br>
    <div class="row" >
    <div class="g-recaptcha" data-sitekey="6LeKoP8eAAAAAOidJ-6qBGf3JFw4w9F0beI1cfGD"></div>
      </div>
    
            </div>
            
            <a href="login.php" class="submit_btn"><input class="submit" type="submit" value="Sign in"></a>
           

            <div class="log">
              Already have an account?  <a href="login.php">Login</a>
            </div>

        </form>
    </div>
</body>
</html>