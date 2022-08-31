<?php

// http://localhost/management-system-crud-app/api/delete.php?id=4

$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());	 // Connect to the MySQL database

if (isset($_GET['id'])){  // If no [id] is provided from client, do nothing

    $id = $_GET['id'];  // Get data from the URL

    $sql = "DELETE FROM clients WHERE `clients`.`id` = $id;"; // SQL DELETE statement

    $query = mysqli_query($connection, $sql); // Get the results of the DELETE statement
    if ($query) {
      echo "1 row deleted";
    } else {
      echo mysqli_error($connection);
    }
}
?>

