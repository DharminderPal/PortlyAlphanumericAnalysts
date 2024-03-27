<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
*{
    padding: 0;
    margin: 0;
    background-image: url("4.jpg");
}

.item2{
   margin-left: 50px;


}
.container{
    display: flex;
  color:red ;

}
.box2{
    display: flex;
    margin-top: 20px;
  color: white;
  width: 73%;

}
.box3{
    display: flex;
    margin-top: 20px;
    color:red;
    width: 50%;
}
.box4{
    display: flex;
    margin-top: 20px;
    color:white ;
  width: 50%;
}

</style>

</head>
<body>
   <div class="container">
   <div class="item1"><?php 
$n=5;
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



   ?></div>
   <div class="item2"><?php
   for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
} 
   ?></div>
  <div class="item2"><?php
  for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
} 
  ?></div>

<div class="item2">
    <?php

    for($i=0;$i<=$n;$i++){
        for($j=0;$j<=$n;$j++){
            if ($j==0||$j==$n||$i==2) {
                echo" *";
            }
            else{
                echo"&nbsp;&nbsp;&nbsp";
            }

        }

        echo "<br/>";
    }

    ?>
</div>

<div class="item2"><?php
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


?></div> 
<div class="item2"><?php

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}
?></div> 
<div class="item2"><?php
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$j==$n||$i==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}
?></div> 
   </div> 
<div class="box2">
   <div class="item1"><?php
   $n=5;
   for($i=0;$i<=$n;$i++){
       for($j=0;$j<=$n;$j++){
           if ($j==0||$i==$n||$i==0||$j==$n-1) {
               echo"*";
           }
           else{
               echo"&nbsp;&nbsp;&nbsp";
           }

       }

       echo "<br/>";
   }
   ?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


?></div>

<div class="item2"><?php 

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==$n-$i) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


?></div>
<div class="item2"><?php 
 for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==$n-$i) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


 ?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$i==5||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==0||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==0||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$j==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$i==$n) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php


for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||($j==$n&&$i<=3)||$i==$j&&$j>3) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}
?></div>
</div>

<div class="box3">
<div class="item1"><?php
$n=5;
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==$n) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}
?>
</div>
<div class="item2"><?php 

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$i==$n) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||($j==$n&&$i<=3)||$i==$j&&$j>3) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$j==$i||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}
?></div>
<div class="item2"><?php
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$j==$i||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php 

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$j==0||($i==3&&$j>2)||($i>2&&$j==5)||$i==$n) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
</div>




<div class="box4">
<div class="item1"><?php 
    $n=5;
    for($i=0;$i<=$n;$i++){
      for($j=0;$j<=$n;$j++){
          if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
              echo" *";
          }
          else{
              echo"&nbsp;&nbsp;&nbsp";
          }

      }

      echo "<br/>";
  } 
?>
</div>

<div class="item2"><?php 

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$i==0||$i==3||$i==$n) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


?></div>
<div class="item2"><?php 
  for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


?></div>
<div class="item2"><?php

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}


?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==2) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==$n||$j==0||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

?></div>
<div class="item2"><?php 
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($j==0||$j==$i||$j==5) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}



?></div>
<div class="item2"><?php 
   for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==0||$i==3||$i==5||($i==4&&$j==5)||($i==1&&$j==0)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
} 


?></div>






</div>
</body>
</html>