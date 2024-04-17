<?php
// session_start();
include("database.php");

if ($conn instanceof mysqli) {
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
}

//  echo $_SESSION['email'];
if (!isset($_SESSION['loggedin'])) {
  // header("location: login.php");
  //  $first_name = $_SESSION['first_name'];
}

?>



<link rel="stylesheet" href="../Css/header.css">
<div class="navbar">
  <div class="logoIcon">
    <img src="../images/logo.png" alt="Logo Icon" />
  </div>

  <div class="headerLinks">
    <ul>
      <li><a href="../Htmls/index.php">HOME</a></li>
      <li><a href="../Htmls/favourites.php">FAVOURITES</a></li>
      <li><a href="../Htmls/filterpage.php">SEARCH</a></li>
      <li><a href="../Htmls/userAccount.php">MENU</a></li>
      <li id="replacingNavText"><a href="../Htmls/signup.php">
          <?php /*if ($_SESSION['loggedin'] === true) {
            echo $_SESSION['email'];
          }else{
            echo "SIGN UP";
          }*/ ?>
         
        </a></li>
    </ul>
  </div>
</div>