<?php
session_start();



if(isset($_POST['rememberMe'])){
    setcookie("rememberMe",true,time()+(86400*30),"/");
}else{
    setcookie("rememberMe",true,time(),"/");
}

if(true){
    $_SESSION['user'] = "valie";
    header("Location: dashboard.php");
}

// echo"<pre>";
// print_r($_POST);
// echo"</pre>";

// echo $_POST['lname'];

?>