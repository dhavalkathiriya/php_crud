<?php
  include 'connection.php';
  
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "insert into `student` (name,email,password) values('$name','$email','$password')";

  $result=mysqli_query($con,$sql);
  if ($result) {
    echo 'data insert';
    header('location:index.php');
  }else{
    echo "data not insert";
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