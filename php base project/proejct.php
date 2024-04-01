<?php
include('roll.php');
?>
<?php include('connect.php');
?>
<div class="box">
<h2>ALL STUDENT</h2>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add student
</button>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>

   <?php




$query ="select * from `students`";
$r = mysqli_query($connection, $query );

if(!$r){
    die("conection faild");
}
else{
while($row = mysqli_fetch_assoc($r)) {
    ?>

<tr>
      <td><?php  echo $row['id']; ?></td>
      <td><?php  echo $row['first_name']; ?></td>
      <td><?php  echo $row['last_name']; ?></td>
      <td><?php  echo $row['age']; ?></td>
    </tr>
<?php
}
}
?>
  </tbody>
</table>



<!-- Modal -->
<form  action="inser_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     <div class="form-group">
      <label for="f_name">First_Name</label>
      <input type="text" name="f_name" class="form-control">
     </div>

     <div class="form-group">
      <label for="last_name">last_Name</label>
      <input type="text" name="last_name" class="form-control">
     </div>

  </form>


     <div class="form-group">
      <label for="age">age</label>
      <input type="text" name="age" class="form-control">
     </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="add_students" value="ADD">ADD
      </div>
    </div>
  </div>
</div>
</form>

<?php
include('footer.php')
?>
