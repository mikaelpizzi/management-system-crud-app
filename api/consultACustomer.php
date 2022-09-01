<?php
$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());	 // Connect to the MySQL database

$id = $_GET["id"];

$sql = "SELECT * FROM `customers` WHERE id = $id;";  // SQL SELECT statement to get our customers

$result = mysqli_query($connection, $sql); // Get the results of the SELECT statement and store it in $result

$customers = array();

while ($row = mysqli_fetch_array($result)) {  // Iterates every row of out database and push the data in a array
	array_push($customers, $row);
}

echo json_encode($customers); // Encode our customers to a JSON format

mysqli_free_result($result);  // Frees result memory
mysqli_close($connection);  // Closes database connection
?>
