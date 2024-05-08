 <?php
require('function.php');
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Database</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>#</td>
            <td>Date & Time</td>
            <td>Image</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM photos ORDER BY id DESC");
        foreach ($rows as $row):
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["date"]; ?></td>
             <!-- Concatenate img directory with image path  -->
            <td><img src="img/<?php echo $row["image"]; ?>" width="200" title=""></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="../webcam/"><button type="button" name="button">Go to Webcam Page</button></a>
</body>
</html> 
