<?php
session_start();
include "../connection.php";

if(isset($_POST['sub']))
{
$a = $_POST['email'];
$b = $_POST['psw'];
$b=md5($b);

$sql = "SELECT * FROM register WHERE email= '$a' and password= '$b' ";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


if($rowcount > 0)
{
	
	$_SESSION["login"]="1";
	$_SESSION['id'] = $user_id;
	$_SESSION['name'] = $user_name;
	$_SESSION['email'] = $user_email;
	unset($_SESSION["login_error"]);
	header("location: ../index.php");
}
else	
{	
	$_SESSION["login_error"] = "Please check login";
    echo "<script>alert('Please enter valid email or password');
    window.location.href = 'login.php';
    </script>";
	
}
}






?>