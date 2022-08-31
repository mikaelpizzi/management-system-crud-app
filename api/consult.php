<?php

// http://localhost/management-system-crud-app/api/delete.php?id=4

$connection = new mysqli("localhost", "root", "", "system")
or die("not connected".mysqli_connect_error());	 // Connect to the MySQL database

$sql = "SELECT * FROM `clients`;";  // SQL SELECT statement to get our clients

$result = mysqli_query($connection, $sql); // Get the results of the SELECT statement and store it in $result

while ($row = mysqli_fetch_array($result)) {  // Print rows of content that includes the selected columns
    echo "{$row['name']} {$row['surname']} {$row['email']} {$row['telephone']} {$row['details']}";
    echo '<br />';
}

mysqli_free_result($result);  // Frees result memory
mysqli_close($connection);  // Closes database connection

?>
