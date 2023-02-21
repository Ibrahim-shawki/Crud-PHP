<?php 
require '../config.php';  


session_destroy();

header("location:".BURLA.'login.php');

?>
