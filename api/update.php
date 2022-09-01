<?php
$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());	 // Connect to the MySQL database

if (isset($_GET['name'])){  // If no [name] is provided from client, do nothing
	$id = $_GET['id'];
	$name = $_GET['name'];  // Get data from the URL
	$surname = $_GET['surname'];
	$email = $_GET['email'];
	$telephone = $_GET['telephone'];
	$details = $_GET['details'];

    $sql = "UPDATE `customers` SET `name` = '$name', `surname` = '$surname', `email` = '$email', `telephone` = '$telephone', `details` = '$details' WHERE `customers`.`id` = $id;"; // SQL UPDATE statement

	$query = mysqli_query($connection, $sql);  // Get the results of the INSERT statement
	if ($query) {
		echo "1 row updated";
	} else {
		echo mysqli_error($connection);
	}
}
?>
