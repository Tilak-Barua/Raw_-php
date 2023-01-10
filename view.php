<?php
include 'connect.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >

    <title>Document</title>
</head>
<body>
    
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile</th>
      <th scope="col">Picture</th>
      <th scope="col">Description</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
   
<?php

$sql= "Select * from client_list";
$res= mysqli_query($con,$sql);
if($res)
{
while($row=mysqli_fetch_assoc($res)){
    $id=$row['ID'];
    $name=$row['Name'];
    $email=$row['Email'];
    $mobile=$row['Mobile_no'];
    $password=$row['Password'];
    $picture=$row['Picture'];
    $description=$row['Description'];
    
echo '<tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>'.$picture.'</td>  
        <td>'.$description.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?uid='.$id.' " class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?did='.$id.' " class="text-light">Delete</a></button>
        </td>
     </tr>';
              }
}




?>


 







  </tbody>
</table>

</div>






</body>
</html>





    

