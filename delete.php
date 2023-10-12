<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
}

$sql ="delete from `student` where id=$id";

$result=mysqli_query($con,$sql);

if ($result) {
    echo 'deleted sucessfully';
    header('location:index.php');
}else{
   echo 'data not deleted';
}




?>