<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'information');

if(mysqli_connect_errno())
  {
  echo " failed to connect to mysql:".mysqli_connect_error();
  }
 ?>
