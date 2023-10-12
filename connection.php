<?php

$con = new mysqli('localhost','root','','php_crud',);

if ($con) {
  echo "database is connected";
} else {
    die(mysqli_error($con));
}

?>