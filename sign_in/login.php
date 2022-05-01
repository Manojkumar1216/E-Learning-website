<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login_action.php" method="post">
        <!-- <form method="post"> -->
            <div class="text">
                <input type="email" id="email" name="email" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text">
                <input type="password" id="psw" name="psw" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="forget">
               <a href="../forget_password/forget_pass.php">Forget password?</a> 
            </div>
           
            <a class="submit_btn"><input name="sub" class="submit" type="submit" value="Login"></a>

            <div class="signup">
              Don't have an account?  <a href="signup.php">register</a>
            </div>
        </form>
    </div>
</body>
</html>