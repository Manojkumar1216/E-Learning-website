
<!-- send mail section -->

<?php
$message="";
$valid='true';
include("../connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email_reg=mysqli_real_escape_string($conn,$_POST['email']);
    $details=mysqli_query($conn,"SELECT name,email FROM register WHERE email='$email_reg'");
    if (mysqli_num_rows($details)>0) {
       //if the given email is in database, ie. registered
        $message_success=" Please check your email inbox or spam folder ";
       
        //generating the random key
        $key=md5(time()+123456789% rand(4000, 55000000));
       
        //insert this temporary key into database
        $sql_insert=mysqli_query($conn,"INSERT INTO forget_password(email,temp_key) VALUES('$email_reg','$key')");
       
        //sending email about update
        $to      = $email_reg;
        $subject = 'Reset your password';
        $msg = "Please click on link and reset your password:". "\r\n"."http://localhost/WEB1/forget_password/reset_pass.php?key=".$key."&email=".$email_reg;
        $headers = 'From: SkillSharp  E-Learning paltform' . "\r\n";
        mail($to, $subject, $msg, $headers);
        echo "<script>alert('check your email to reset your password');
        window.location.href = '../sign_in/login.php';
        </script>";
    }
    else{
        $message="Sorry! no account associated with this email";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <link rel="stylesheet" href="../css/forgot.css">
</head>
<body>
    <div class="container">
        <h1>Forgot your password?</h1>
        <p>Enter your email below <br> And recover your account</p>
        <form method="post">
            <div class="text">
                <input class="box" id="email" name="email"  type="email"
                value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
                 placeholder="Email" required>

            </div>

            <a  class="submit_btn"><input class="submit" type="submit" value="Send Mail"></a>
           
        </form>
    </div>
</body>
</html>