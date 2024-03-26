<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
     .box{
       display: flex;
       border: solid  black 2px ;
      flex-direction: column;
     }

    </style>
</head>
<body>
    <div class="fluid-container">
<?php
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

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==1||$i==3||$i==5||($i==4&&$j==5)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}
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
for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$n;$j++){
        if ($i==1||$i==3||$i==5||($i==4&&$j==5)||($i==2&&$j==0)) {
            echo" *";
        }
        else{
            echo"&nbsp;&nbsp;&nbsp";
        }

    }

    echo "<br/>";
}

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
</body>
</html>