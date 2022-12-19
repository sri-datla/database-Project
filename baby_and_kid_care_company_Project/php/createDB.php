<!doctype html>
<html>
<head>
	<title>Create a Database</title>
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<?php
	$servername = "localhost";
	$databasename = "baby_and_kid_care_company_DB";
	$username = "root";
	$password = "";

	try {
		$conn = new PDO("mysql:host=$servername", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Sets the error mode of PHP engine to Exception to display all the errors
		echo "<p style='color:green'>Connection Was Successful</p>";
	} catch (PDOException $err) {
		echo "<p style='color:red'>Connection Failed: " . $err->getMessage() . "</p>";
	}

	try {
		$sql = "CREATE DATABASE IF NOT EXISTS baby_and_kid_care_company_DB;";   // SQL query

		$conn->exec($sql);
		echo "<p style='color:green'>baby_and_kid_care_company_DB is Created Successfully</p>";
	} catch (PDOException $err) {
		echo $sql . "<p style='color:red'>" . $err->getMessage() . "</p>";
	}

	// Close the connection
	unset($conn);

	echo "<a href='../index.html'>Back to the Homepage</a>";

	?>

</body>

</html>