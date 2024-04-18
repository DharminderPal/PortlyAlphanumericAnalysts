<?php
include('dbconnection.php');
include('header.php');

$fname = '';
$lname = '';
$age = '';

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM student WHERE id='$id'";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed: ".mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];
    }
}

if(isset($_POST['update'])){
    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    // !is_numeric($age) || floatval($age) != intval($age)
    //!is_numeric($age): Yeh condition check kar rahi hai ki $age variable numeric hai ya nahi. 
    // floatval($age) != intval($age)  iss condition mai chk ho rha hai ki agar valu float or integr hai toh woo tru hogi but 
    if (!is_numeric($age) || floatval($age) != intval($age)) { 

        header('location:html.php?message=Invalid input! Age should be an integer.');
        exit; 
    }

   
    $query = "UPDATE student SET fname='$fname', lname='$lname', age='$age' WHERE id='$idnew'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed: ".mysqli_error($connection));
    } else {
        header('location:html.php?update=success');
        exit; 
    }
}
?>

<form action="update.php?id_new=<?php echo $id ?>" method="post">
    <div class="form-group">
        <label for="fname">fname</label>
        <input type="text" name="fname" class="form-control" value="<?php echo $fname ?>">
    </div>
    <div class="form-group">
        <label for="lname">lname</label>
        <input type="text" name="lname" class="form-control" value="<?php echo $lname ?>">
    </div>
    <div class="form-group">
        <label for="age">age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $age ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update" value="UPDATE">
</form>

<?php include('footer.php'); ?>
