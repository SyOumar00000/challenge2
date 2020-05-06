<?php
include('connect.php');
  $sql1 = "SELECT * FROM trip_information ";
$information = mysqli_query($conn,$sql1);

 ?>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="3" width="100%">
  <center> Informations voyage</center>

  <tr>

    <td> username </td>
    <td> compagnie</td>
    <td>  Villedep </td>
      <td>  Villed </td>
    <td> dated </td>
    <td> heuredep </td>
  </tr>

  <?php

  // on va scanner tous les tuples un par un
while ($data = mysqli_fetch_array($information)) {
	// on affiche les résultats

  echo "<tr>";
  echo "<td>".$data['username']."</td>";
  echo "<td>".$data['compagnie']."</td>";
  echo "<td>".$data['villedep']."</td>";
  echo "<td>".$data['villed']."</td>";
  echo "<td>".$data['dated']."</td>";
  echo "<td>".$data['heuredep']."</td>";
  echo "</tr>";
}

   ?>

</table>
