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

            <label for="email">Email</label>
            <input type="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password"  placeholder= "Enter your password" required >

            <p class="forgettxt">Forget passoword ?</p>
            <button type="button" class="submitbtn">Login</button>
            <p class="signuptxt">Don't have an account? <span class="signupLink"><b><a href="">Sign Up</a></b></span></p>

            </div>

            </form>
        </div>
    </div>

  <?php include 'footer.php'; ?>
    
</body>
</html>