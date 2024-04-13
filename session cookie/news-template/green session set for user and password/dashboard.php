<?php
session_start(); 


if(isset($_SESSION['username'])) {
   $_SESSION['username']; 
} else {
    header("Location: html.php"); 
    exit;
}
echo"i am in dashborad";
?>
<a href="logout.php">logout</a>