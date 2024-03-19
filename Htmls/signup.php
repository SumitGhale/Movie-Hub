<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/signup.css">
    <link rel="stylesheet" href="../Css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php include 'header.php'; ?>
</head>
<body>

    <div class="main">
        <div class="leftdiv">
            <h1>Don't just watch it - Read It !</h1>
            <h2>Get true & honest reviews at <span style="color:red"> Movies Hub </span></h2>
            <img src="../images/signupimage.png" alt="signup picture">
        </div>

        <div class="rightdiv">
            <h1>Create your account</h1>

            <form action="" method="post">

            <div class="container">

            <label for="firstname">First name*</label>
            <input type="text" placeholder="Enter your first name" required>

            <label for="middlename">Middle name (if any)</label>
            <input type="text"  placeholder= "Enter your middle name"  >

            <label for="lastname">Last name*</label>
            <input type="text"  placeholder= "Enter your last name" required >

            <label for="email">Email*</label>
            <input type="email"  placeholder= "Enter your email " required >

            <label for="password">Password*</label>
            <input type="password"  placeholder= "Enter your password" required >

            <div class="checkbox"> <i class="fa-solid fa-square-check"></i> <p class="agreementTxt">I have read and agree with the terms of use and Privacy Policy</p></div>
           

            <button type="button" class="signupbtn">Sign Up</button>

            <p class="signuptxt">Already have an account? <span class="loginLink"><b><a href="">Login</a></b></span></p>

            </div>

            </form>
        </div>
    </div>

  <?php include 'footer.php'; ?>
    
</body>
</html>