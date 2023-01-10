<?php
include 'connect.php';
if(isset($_GET['did'])){
$id= $_GET['did'];
$sql="delete from client_list where id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header('location:view.php');
}
else{
    die(mysqli_error($con));
}
}

?>