<?php
require('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image database</title>
</head>
<body>
    <table border= 1 cellspacin= 0 cellpadding =10 >
     <tr>
         <td>#</td>
         <td>date & time</td>
         <td>image</td>
     </tr>
     <?php
     
     $i=1;
      $rows =mysqli_query($conn,"SELECT * FROM photos ORDER BY id DESC")
     ?>
     <?php  
     
     foreach($rows as $row) :?>
     <tr>

  <td><?php  echo  $i++?></td>
  <td><?php  echo  $row["date"];?></td>
  <td><?php  echo  $row["image"];?></td>
  <td><img src="img/"<?php  echo  $row["image"];?> width="200" title=""></td>

     </tr>
     <?php endforeach;?>
    </table>
    <a href="../webcam/"><button type="button" name="button">GO to web page cam</button></a>
</body>
</html>