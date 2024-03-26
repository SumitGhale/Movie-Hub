<?php

session_start();
$_SESSION = array();
session_destroy();

header("loaction: login.php");

?>