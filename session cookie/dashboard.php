<?php
session_start();
// print_r($_SESSION); exit;
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
echo "I am Dahsboard";



?>
<a href="logout.php">logout</a>