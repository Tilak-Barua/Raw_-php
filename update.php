<?php
include 'connect.php';
$id= $_GET['uid'];

$sql="Select * from client_list where ID=$id";
$res = mysqli_query($con,$sql);



$row=mysqli_fetch_assoc($res);

$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile_no'];
$password=$row['Password'];
$picture=$row['Picture'];
$description=$row['Description'];



if(isset($_POST['submit'])){

    

$name=$_POST['Name'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile_no'];
$password=$_POST['Password'];
$picture=$_POST['Picture'];
$description=$_POST['Description'];


$sql="update client_list set ID='$id', Name='$name', Email='$email',
 Password='$password', Picture='$picture', Description='$description'
                           where ID=$id";


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
    <input type="text" class="form-control" autocomplete="off" placeholder="Enter your Name" name="Name" value=<?php echo $name ;?>>
    </div>
  
    <div class="from-group">
    <labe>Email</label>
    <input type="email" class="form-control" autocomplete="off"placeholder="Enter your Email Address" name="Email"value=<?php echo $email ; ?>>
    </div>
    
    <div class="from-group">
    <labe>Mobile</label>
    <input type="text" class="form-control"autocomplete="off" placeholder="Enter your Mobile Number" name="Mobile_no"value=<?php echo $mobile ; ?>>
    </div>

    <div class="from-group">
    <labe>Password</label>
    <input type="text" class="form-control" autocomplete="off"placeholder="Enter your Password" name="Password"value=<?php echo $password ; ?>>
    </div>

    <div class="from-group">
    <labe>Picture</label>
    <input type="text" class="form-control"autocomplete="off" placeholder="Enter your Picture" name="Picture"value=<?php echo $picture;  ?>>
    </div>

    <div class="from-group">
    <labe>Description</label>
    <input type="text" class="form-control"autocomplete="off" placeholder="Enter your Description" name="Description"value=<?php echo $description  ;?>>
    </div>


<div class="from-group"><button type="submit" name="submit"class="btn btn-primary">Update</button>
</div>

  

 
</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>


  </body>
</html>