<?php
require_once('connect.php');
?>


<?php

if(isset($_POST['add_students'])){

$first_name=$_POST['f_name'];
$last_name=$_POST['last_name'];
$age=$_POST['age'];


if( $first_name ==""|| empty($first_name))
{
    header('location:proejct.php?m=you need to fill in the first name!');
}
else {
    $query = "INSERT INTO students(f_name,last_name,age)
     VALUES ($first_name,$last_name,$age)";
     echo $query;
     exit;
$r=mysqli_query($connection,$query);

if(!$r){

  die("query faild".mysqli_error($connection));
}
else{
    header('location:proejct.php?insert_msg=you data has been added successfully');
}



}
                                   
}




?>