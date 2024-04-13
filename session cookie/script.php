<?php
session_start();




if(true){
    $_SESSION['user'] = "valie";
    header("Location: dashboard.php");
}

// echo"<pre>";
// print_r($_POST);
// echo"</pre>";

// echo $_POST['lname'];

?>