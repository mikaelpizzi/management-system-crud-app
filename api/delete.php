<?php

// http://localhost/management-system-crud-app/api/delete.php?id=4

$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());

if (isset($_GET['id'])){

$id = $_GET['id'];

  $sql = "DELETE FROM clients WHERE `clients`.`id` = $id;";

  $query = mysqli_query($connection, $sql);
  if ($query) {
    echo"1 row deleted";
  } else {
    echo mysqli_error($connection);
  }

}

?>
