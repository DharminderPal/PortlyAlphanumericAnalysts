<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","capture");

$conn=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$conn){
     die("connection faild");
}

if(isset($_FILES["capture"]["tmp_name"])){
    $tmpName =$_FILES["capture"]["tmp_name"];
    $imageName = date("Y.m.d")."-".date("h.i.sa").'.jpeg';
    move_uploaded_file($tmpName,'img/'.$imageName);


    $date =date("y/m/d")." &".date("h.i.sa");
    $query="INSERT INTO photos VALUES('','$date','$imageName')";
     mysqli_query($conn,$query);
}













?>