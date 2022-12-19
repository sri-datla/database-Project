<!doctype html>
<html>
<head>
	<title>Connect to a Database</title>
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body>

	<?php
	$servername = "localhost";   
	$username = "root";          
	$password = "";			  


	try {
		$conn = new PDO("mysql:host=$servername", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "<p style='color:green'>Connection Was Successful</p>";    
	} catch (PDOException $err) {
		echo "<p style='color:red'>Connection Failed: " . $err->getMessage() . "</p>\r\n";   
	}

	unset($conn);  

	echo "<a href='../index.html'>Back to the Homepage</a>";
	?>

</body>

</html>