<?php
session_start();
if (isset($_SESSION['first_name'])) {
  $first_name = $_SESSION['first_name'];
} else {
  $first_name = 'Guest'; // Setting a default value
}
include("database.php");
?>

  <link rel="stylesheet" href="../Css/header.css">
<div class="navbar">
  <div class="logoIcon">
    <img src="../images/logo.png" alt="Logo Icon" />
  </div>

  <div class="headerLinks">
    <ul>
    <?php
    
      // Checking if the current page is login or sign up
     $currentPage = basename($_SERVER['PHP_SELF']);
     if($currentPage != 'login.php' && $currentPage != 'signup.php') {
        
         echo '<li><a href="index.php">HOME</a></li>';
         echo '<li><a href="favourites.php">FAVOURITES</a></li>';
         echo '<li><a href="filterpage.php">SEARCH</a></li>';
         echo '<li><a href="userAccount.php">PROFILE</a></li>';
         echo '<li><p style="color: white;">Hi, ' . $first_name . '</p></li>';
     
     } else {
         
         echo '<li><span style="color: white;">HOME</span></li>';
         echo '<li><span style="color: white;">FAVOURITES</span></li>';
         echo '<li><span style="color: white;">SEARCH</span></li>';
         echo '<li><span style="color: white;">PROFILE</span></li>';
         echo '<li><a href="signup.php" style="color: white;">SIGN UP</a></li>';
        
     }?>

    </ul>
  </div>
</div>


