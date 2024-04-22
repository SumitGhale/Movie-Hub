<?php
// session_start();
 include 'header.php'; 
// Include database connection file
include_once("database.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input (you may add more validation here)
    if(empty($email) || empty($password)) {
        $error = "Please enter both email and password";
    } else {
        // Retrieve user data from database
    
        $sql = "SELECT id,password,email,first_name FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_error($conn)) {
            echo "Error: Invalid email or password";
            }
            while ($row = mysqli_fetch_assoc($result)) {

                $stored_password = $row['password'];

                if(password_verify($password,$stored_password)) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['loggedin'] = true;
            $_SESSION['first_name'] = $row['first_name'];
                    header("location: index.php"); 
                    exit;
                } else {
                    $error = "Invalid email or password";
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

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

            <div class="container">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder= "Enter your password" required >

            <p class="forgettxt">Forget passoword ?</p>
            <button type="submit" name = "submit" value = "register" class="submitbtn">Login</button>
            <p class="signuptxt">Don't have an account? <span class="signupLink"><b><a href="../Htmls/signup.php">Sign Up</a></b></span></p>

            </div>

            </form>
        </div>
    </div>

  <?php include 'footer.php'; ?>
    
</body>
</html>