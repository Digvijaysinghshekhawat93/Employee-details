<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="insert into `crud`(name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "data iserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Enter your name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter your email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="num" class="form-control" aria-describedby="emailHelp" name="mobile" placeholder="Enter your mobile number" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="password" placeholder="Enter your password" autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
