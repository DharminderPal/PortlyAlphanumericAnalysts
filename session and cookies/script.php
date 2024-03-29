<?php

session_start();
$_SESSION['tree']="okok";
if(isset($_POST)===true){
echo"session ok hai";
}

if(isset($_POST['rememberMe'])){
    setcookie("username",$_POST['username'],time()+(60*60*24*7),"/");
    setcookie("password",$_POST['password'],time()+(60*60*24*7),"/");
    setcookie("rememberMe",true,time()+(60*60*24*7),"/");
}else{
    setcookie("username",$_POST['username'],time(),"/");
    setcookie("password",$_POST['password'],time(),"/");
    setcookie("rememberMe",true,time(),"/");
}








// echo"<pre>";
// print_r($_POST);
// echo"</pre>";

// echo $_POST['lname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<a href="logout.php">logout</a>

</body>
</html>