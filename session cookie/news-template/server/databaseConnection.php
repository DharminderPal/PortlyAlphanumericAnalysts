<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pk";
$conn = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_error()){
    die("Connect ERROR". mysqli_connect_error());
}
echo "conncetion succesfull";

?>