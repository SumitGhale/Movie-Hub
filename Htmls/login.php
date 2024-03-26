<?php
//This script will handel login

session_start();

//Check if the user is already logged in
if(isset($_SESSION['email'])){
    header("location: index.php");
    exit;
}

require_once "config.php";
$email = $password = "";
$err = "";


//if request method is post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email + password";
    }

    else
    {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }

    if(empty($err))
    {
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = $email;

        //Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt) == 1)
            {
                mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password, $hashed_password))
                    {
                        //This means the password is correct. Allow user to login
                        session_start();
                        $_SESSION["email"] = $email; 
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to index.php
                        header("location: index.php");
                    }
                }
            }

        }
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/login.css">
    <link rel="stylesheet" href="../Css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php include 'header.php'; ?>
</head>
<body>

    <div class="main">
        <div class="leftdiv">
            <img src="../images/loginpic.png" alt="login picture">
            <h1>Welcome back ! </h1>
        </div>

        <div class="rightdiv">
            <h1>Login</h1>
            <h3>Enter your login details</h3>

            <form action="" method="post">

            <div class="container">

            <label for="user_email">Email</label>
            <input type="email" name="user_email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder= "Enter your password" required >

            <p class="forgettxt">Forget passoword ?</p>
            <button type="submit" class="submitbtn">Login</button>
            <p class="signuptxt">Don't have an account? <span class="signupLink"><b><a href="../Htmls/signup.php">Sign Up</a></b></span></p>

            </div>

            </form>
        </div>
    </div>

  <?php include 'footer.php'; ?>
    
</body>
</html>