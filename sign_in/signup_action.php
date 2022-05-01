<?php
include "../connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);


$slquery1 = "SELECT 1 FROM register WHERE email = '$email'";

$selectresult1 = mysqli_query($conn,$slquery1);

if(mysqli_num_rows($selectresult1)>0)
    {
       echo "<script>alert('email already exists');</script>";
       header("location:signup.php");
   }

   elseif($password != $cpassword){
       echo "<script>alert('passwords doesn't match');</script>";
   }
   else{
      $sql = "INSERT INTO register(name,email,password)VALUES('$name','$email','$password')";
      $result=mysqli_query($conn,$sql);

      if($result){

       echo "<script>alert('Thanks for SignUp');
       window.location.href = 'login.php';
       </script>";
         
   }
}






?>
