
<!-- // $hostName = "localhost";
// $dbUser = "root";
// $dbPasssword = "";
// $dbName = "movie_hub";
// $conn = mysqli_connect($hostName, $dbUser, $dbPasssword, $dbName);

// if(!$conn){
//     die("Something went wrong");
// } -->

<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'movie_hub');

//Try connecting to the database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD ,DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>