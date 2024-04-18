<?php


session_start(); 
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password']; 
    if($username === "dharminder" && $password === "12345678") {
        $_SESSION['username'] = $username; 
        header("Location: html.php"); 
// print_r( $_SESSION);
        exit; 
    } else {
        echo "Invalid username or password";
    }
}
// ?>