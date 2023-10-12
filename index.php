<?php

include 'connection.php';

$sql = "select * from `student`";
$result = mysqli_query($con,$sql);
// if ($result) {
//  
if(mysqli_num_rows($result) > 0)  {

// // }
// while ( $row =mysqli_fetch_assoc($result)) {
//   $id=$row['id'];
//   $name=$row['name'];
//   $email=$row['email'];
//   $password=$row['password'];
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  a{
   text-decoration:none;
   color:white;
  }
</style>
<body>
<

<div class="container mt-3">
  <h2>Dark Striped Table</h2>
  <button class="btn btn-primary"><a  class="text-light " href="user.php">Add User</a></button>        
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php

// include 'connection.php';

// $sql = "select * from `student`";
// $result = mysqli_query($con,$sql);
while ( $row =mysqli_fetch_assoc($result)) {
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];
  $password=$row['password'];
// }


?>
      <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $password; ?></td>
        <td>
         <Button class='btn btn-danger'>
          <a href="delete.php?deleteid=<?php echo $id;?>"> Delete</a>
         </Button>
         <Button class='btn btn-secondary'>
          <a href="edit.php?editid=<?php echo $id;?>">Edit</a>
         </Button>

        </td>
      </tr>

      <?php  } ?>
      
    </tbody>
  </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
</div>

</body>
</html>