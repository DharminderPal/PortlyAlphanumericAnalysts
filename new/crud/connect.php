<?php


// connection success fully done 
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","crudop");

$connection =  mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$connection){
die("conection faild");
}
else{
    echo"  ";
}




 



?>