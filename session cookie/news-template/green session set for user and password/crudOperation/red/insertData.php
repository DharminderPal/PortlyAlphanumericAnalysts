<?php
include('dbconnection.php');

if(isset($_POST['add_student'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    // Validate age input
    if (!is_numeric($age) || floatval($age) != intval($age)) {
        // If age is not a valid integer, redirect with error message
        header('location:html.php?message=Invalid input! Age should be an integer.');
        exit; 
    }

    // Age is valid, proceed with database insertion
    $query = "INSERT INTO student (fname, lname, age) VALUES ('$fname', '$lname', '$age')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed: " . mysqli_error($connection));
    } else {
        header('location:html.php?insert=success');
        exit; 
    }
}

?>