<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location:dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<form action="script.php"   method="post">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="username" class="form-control" id="username" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <select class="form-label" name="org" >
                <option selected value="choose">Choose Org</option>
                <option  value="ls">Learning Sessions</option>
                <option value="dizzibooster">Dizzibooster</option>
              </select>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
  </div>   
  <div class="mb-3">
    <label for="fname"    class="form-label">First Name</label>
    <input type="text"  name="fname" class="form-control" id="fname" >
  </div> 
  <div class="mb-3">
    <label for="lname"    class="form-label">Last Name</label>
    <input type="text"  name="lname" class="form-control" id="lname" >
  </div>                   
  <div class="mb-3form-check">
    <input  <?php if(isset($_COOKIE['rememberMe']) ){echo "checked";} ?> type="checkbox" name="rememberMe" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
