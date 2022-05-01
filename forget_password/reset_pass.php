
<!-- reset password section -->

<?php 
$message="";
$valid='true';
include("../connection.php");
session_start();
$key=$_GET['key'];
$email=$_GET['email'];
// print_r($_GET['email']);
if(isset($_GET['key']) && isset($_GET['email'])) {
    $check=mysqli_query($conn,"SELECT * FROM forget_password WHERE email='$email' and temp_key='$key'");
   
    //if key doesnt matches
    if (mysqli_num_rows($check)!=1) {
      echo "This url is invalid or already been used. Please verify and try again.";
      exit;
    }
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password1=mysqli_real_escape_string($conn,$_POST['password1']);
        $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
        if ($cpassword==$password1) {
            $message_success=" New password has been changed for ";
            $password=md5($password1);
            //destroy the key from table
            mysqli_query($conn,"DELETE FROM forget_password where email='$email' and temp_key='$key'");
            //update password in database
            mysqli_query($conn,"UPDATE register set password='$password' where email='$email'");
            echo "<script>alert('Password changed successfully');
       window.location.href = '../sign_in/login.php';
       </script>";
        }
        else{
            $message="Verify your password";
        }
}
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
    <link rel="stylesheet" href="../css/forgot.css">
</head>
<body>
    <div class="container">
        <h1> Reset password?</h1>
        <form method="post">
            <div class="text">
                <input class="box" id="psw" name="password1"  type="password"  placeholder="Reset your password" required><br><br>
                <input class="box" id="psw" name="cpassword"  type="password"  placeholder="Conform your password" required>
                <h1></h1>
            </div>
           
            <a  href="../../login.php" class="submit_btn"><input class="submit" type="submit" value="Save Password"></a>
           
        </form>
    </div>
</body>
</html>