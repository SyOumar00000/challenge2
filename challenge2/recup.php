<?php
include('connect.php');
if (isset($_POST['valider']))
{
      $username = $_POST['username'];
      $compagnie =$_POST['compagnie'];
      $villedep = $_POST['villedep'];
      $villed =  $_POST['villed'];
      $dated = $_POST['dated'];
      $heuredep = $_POST['heuredep'];


    $sql = "INSERT INTO trip_information(username,compagnie,villedep,villed,dated,heuredep)
            VALUES('$username','$compagnie','$villedep','$villed','$dated','$heuredep')";


     mysqli_query($conn, $sql) or die('Erreur SQL !'.$sql'<br/>'.mysql_error());


}
