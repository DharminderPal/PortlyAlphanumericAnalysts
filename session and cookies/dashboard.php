<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: form.php");
}
echo "I am Dahsboard";



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