<?php


require_once ("./databaseConnection.php");
print_r($_REQUEST);
session_start();
// echo "<pre>";
// print_r($_SESSION);
exit;
if(isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: ../admin/post.php"); 
    exit(); 
}


 ?>
