<?php

// http://localhost/management-system-crud-app/api/delete.php?id=4

$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());	 // Connect to the MySQL database

$sql = "SELECT * FROM `clients`;";  // SQL SELECT statement to get our clients

$result = mysqli_query($connection, $sql); // Get the results of the SELECT statement and store it in $result

$clients = array();

while ($row = mysqli_fetch_array($result)) {  // Iterates every row of out database and push the data in a array
	array_push($clients, $row);
}

echo json_encode($clients); // Encode our clients to a JSON format

mysqli_free_result($result);  // Frees result memory
mysqli_close($connection);  // Closes database connection

?>
