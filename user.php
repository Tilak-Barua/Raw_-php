<?php
include 'connect.php';
if(isset($_POST['submit'])){

$name=$_POST['Name'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile_no'];
$password=$_POST['Password'];
$picture=$_POST['Picture'];
$description=$_POST['Description'];


$sql="insert into client_list(Name, Email, Mobile_no, Password, Picture, Description)
values('$name','$email','$mobile','$password','$picture','$description')";

$res=mysqli_query($con,$sql);


if($res)
{
    header('location:view.php');


}





}

?>





<!doctype html>
<html lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >

    <title>Client List</title>
  </head>
  <body>
    
    <div class="container my-5"  >
    
    <form method="post">

    <div class="from-group">
    <labe>Name</label>
    <input type="text" class="form-control" autocomplete="off" placeholder="Enter your Name" name="Name">
    </div>
  
    <div class="from-group">
    <labe>Email</label>
    <input type="email" class="form-control" autocomplete="off"placeholder="Enter your Email Address" name="Email">
    </div>

    <div class="from-group">
    <labe>Mobile</label>
    <input type="text" class="form-control"autocomplete="off" placeholder="Enter your Mobile Number" name="Mobile_no">
    </div>

    <div class="from-group">
    <labe>Password</label>
    <input type="text" class="form-control" autocomplete="off"placeholder="Enter your Password" name="Password">
    </div>

    <div class="from-group">
    <labe>Picture</label>
    <input type="text" class="form-control"autocomplete="off" placeholder="Enter your Picture" name="Picture">
    </div>

    <div class="from-group">
    <labe>Description</label>
    <input type="text" class="form-control"autocomplete="off" placeholder="Enter your Description" name="Description">
    </div>


  <button type="submit" name="submit"class="btn btn-primary">Submit</button>


  
</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>


  </body>
</html>