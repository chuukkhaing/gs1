<?php
  $localhost = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'regs1';
  $con = mysqli_connect($localhost, $username, $password, $database)or die(mysqli_error($con));
  mysqli_select_db($con, $database);
?>
