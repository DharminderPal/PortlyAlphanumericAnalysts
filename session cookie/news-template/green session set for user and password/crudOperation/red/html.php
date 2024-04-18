
<?php
header('location:form.php');
include('header.php');
include('dbconnection.php');
session_start(); 
if(isset($_SESSION['username'])) {
   $_SESSION['username']; 
} else {
    header("Location: form.php"); 
    exit;
}




$num_per_page = 4;         //yah pe mai page kitne display krwane hai woo bataya gaya hai 
$page = isset($_GET["page"]) ? $_GET["page"] : 1;  //yaha pe chk kiya gya hai agar mera page url mai set hai toh  uski valu hogi wrna default value 1 hogi  : 1;     iss mai jo mera 1 woo url ke side mai defult valu set krta hai ternery opertator ka istmaal kiya gya hai 
$start_from = ($page - 1) * $num_per_page;    //iss mai mere ko agar currnt page 0 hai toh wha start hoga (0*10)  agr apag e 2 hai toh wha strt hoga (2*10)
$sql =  "SELECT * FROM student ORDER BY age ASC LIMIT $start_from, $num_per_page";  // iss mai mai qury lgaya hu jo database data ko fetch krega 
$result = mysqli_query($connection, $sql);//iss line mai result variable le ke  execute karne 
?>
<div class="box">
    <h2>STUDENT</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">ADD STUDENT</button>
</div>
<table class="table table-hover table-borderd table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loop through records and display them in the table
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

                  <!-- yaha pe paging nation ka isstmaal kiya gya hai ikk naya class bna ke  -->
<div class="pagination">
    <?php
    $sql = "SELECT COUNT(*) AS total FROM student"; // MySQL function hai jo specified table mein total records ka count return karta hai.
    $result = mysqli_query($connection, $sql);//iss line mai mere ko
    $row = mysqli_fetch_assoc($result);  //iss line mai ikk terike se kha skte ha rsult ko hume ikk arr y mai store krwa diyaa hai jsse dat ki ikk sath hi fetch kr sak jiska istmak hum assoc arry ka use kiya gya hai 
    $total_records = $row['total'];//iss line mai humne ikk varialbe bnya jo ki store krwaya hai row  aur haa yah humne yah row ke data ko bhi fetch krna hai iss liye humne yaha pe jo ki query mai hai usse liya gya hai
    $total_pages = ceil($total_records / $num_per_page); // iss mai hum ne page ka record calculate kiya gya hai jisma  hum woo page pr 10 record show homge 
    for ($i = 1; $i <= $total_pages; $i++) {  
        $active_class = ($i == $page) ? 'active' : ''; // iss line mai humne dynamik trika lag ake (ternery operator ka use krte hai )
        echo "<a href='?page=" . $i . "' class='btn btn-secondary " . $active_class . "'>" . $i . "</a> ";
    }
    ?>
</div>




<?php
if(isset($_GET['message'])){
    echo  "<h4>".$_GET['message']."</h4>";
}
?>



<?php

if(isset($_GET['insert'])){
    echo  "<h4>".$_GET['insert']."</h4>";
}


?>
<?php

if(isset($_GET['delete_msg'])){
    echo  "<h4>".$_GET['delete_msg']."</h4>";
}


?>


 <!-- <----modal- -->
    <!-- form -->
    <form action="insertData.php" method="post">
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="form-group">
      <label for="fname">fname</label>
      <input type="text" name="fname" class="form-control">
     </div>
     <div class="form-group">
      <label for="fname">lname</label>
      <input type="text" name="lname" class="form-control">
     </div>
     <div class="form-group">
      <label for="fname">age</label>
      <input type="text" name="age" class="form-control">
    </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_student" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
      <!-- form end -->

















    <?php
include('footer.php')
?>