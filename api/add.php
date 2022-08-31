<?php

// http://localhost/management-system-crud-app/api/?name=Cristiano&surname=Ronaldo&email=cr7_asdfg@test.com&telephone=+(609)123123456&details=cr777777

$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());	 // Connect to the MySQL database

if (isset($_GET['name'])){  // If no [name] is provided from client, do nothing

	$name = $_GET['name'];  // Get data from the URL
	$surname = $_GET['surname'];
	$email = $_GET['email'];
	$telephone = $_GET['telephone'];
	$details = $_GET['details'];

	$sql = "INSERT INTO `clients` (`id`, `name`, `surname`, `email`, `telephone`, `details`) VALUES (NULL, '$name', '$surname', '$email', '$telephone', '$details');";  // SQL INSERT statement

	$query = mysqli_query($connection, $sql);  // Get the results of the INSERT statement
	if ($query) {
		echo "1 row inserted";
	} else {
		echo mysqli_error($connection);
	}

}
?>
