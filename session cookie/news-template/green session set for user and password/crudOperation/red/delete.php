<?php
include('dbconnection.php');
?>

<?php

if(isset($_GET['id'])){
    $id= $_GET['id'];
}

$query=" DELETE FROM student WHERE id='$id'";
$result =mysqli_query($connection,$query);
if(!$result){
    die("query failde".mysqli_error($connection));
}
else{
    header('location:html.php?delete_msg=youhave delete record');
}
?>