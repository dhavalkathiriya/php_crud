<?php
  include 'connection.php';
  $id=$_GET['editid'];
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "update `student` set name='$name',email='$email', password='$password' where id=$id";

  $result=mysqli_query($con,$sql);
  if ($result) {
    echo 'data update data';
    header('location:index.php');
  }else{
    echo "data not update";
  }
}

?>

<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
<title>Document</title>
</head>
<body>
<div class="container">
  <h2>update data</h2>
  <form method="post">
    <div class="form-group">
      <label >Name:</label>
      <input type="text" name="name" class="form-control" id="email" placeholder="Enter name" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>