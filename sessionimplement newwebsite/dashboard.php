<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
echo "I am Dahsboard";



?>
<a href="logout.php">logout</a>