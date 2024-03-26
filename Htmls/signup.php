<?php
include("config.php");
?>

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

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

            <div class="container">

            <label for="first_name">First name*</label>
            <input type="text" name="first_name" placeholder="Enter your first name" required>

            <label for="last_name">Last name*</label>
            <input type="text"  name= "last_name" placeholder= "Enter your last name" required >

            <label for="email">Email*</label>
            <input type="email"  name="email" placeholder= "Enter your email " required >

            <label for="password">Password*</label>
            <input type="password" name="password" placeholder= "Enter your password" required >

            <label for="confirm_password">Confirm Password*</label>
            <input type="password" name="confirm_password" placeholder= "Re-enter your password" required >

            <div class="checkbox"> <i class="fa-solid fa-square-check"></i> <p class="agreementTxt">I have read and agree with the terms of use and Privacy Policy</p></div>
           

            <button type="submit" name = "submit" value = "register" class="signupbtn">Sign Up</button>

            <p class="signuptxt">Already have an account? <span class="loginLink"><b><a href="../Htmls/login.php">Login</a></b></span></p>

            </div>

            </form>
        </div>
    </div>

  <?php include 'footer.php'; ?>
    
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


        if(empty($first_name)){
                echo "Please enter your first name";
        }
       else if(empty($last_name)){
                echo "Please enter your last name";
        }
        else if(empty($email)){
                echo "Please enter your email";
        }
       else if(empty($password)){
                echo "Please enter your password";
        }
        else{

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(first_name, last_name, email, password) 
                    VALUES ('$first_name', '$last_name' , '$email', '$hash')";

            if (mysqli_query($conn, $sql)) {
                header("location: login.php");
                } 
                else {
              echo "Error: " . mysqli_error($conn);
                }        
        }

    }

    mysqli_close($conn);

?>

