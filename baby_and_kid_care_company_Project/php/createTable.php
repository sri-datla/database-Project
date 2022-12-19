<!doctype html>
<html>
<head>
	<title>Create a Table</title>
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body>

	<?php

	$servername = "localhost";
	$dbname = "baby_and_kid_care_company_DB";
	$username = "root";
	$password = "";

	try {
        $conn = new PDO("mysql:host=$GLOBALS[servername];dbname=$GLOBALS[dbname]", $GLOBALS['username'], $GLOBALS['password']);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Sets the error mode of PHP engine to Exception to display all the errors
		echo "<p style='color:green'>Connection Was Successful</p>";
	} catch (PDOException $err) {
		echo "<p style='color:red'>Connection Failed: " . $err->getMessage() . "</p>\r\n";
	}

	$query1 = "CREATE TABLE IF NOT EXISTS COMPANY(
		BRANCH_ID INT NOT NULL,
		BRANCH_NAME VARCHAR(255) NOT NULL,
		CONSTRAINT pk_company PRIMARY KEY(BRANCH_ID)
		);";
	$query2 = "CREATE TABLE IF NOT EXISTS BABY_SITTER (
		SSN INT, 
		FULL_NAME VARCHAR(255) NOT NULL,
		DATE_OF_BIRTH DATE,
		NATIONALITY VARCHAR(50),
		GENDER VARCHAR(20),
		AVAILABLE_DAY_OF_WEEK VARCHAR(20) NOT NULL,
		AVAILABLE_START_TIME TIME NOT NULL,
		AVAILABLE_END_TIME TIME NOT NULL,
		OTHER_OCCUPATION VARCHAR(255),
		HIGHEST_EDUCATION_DEGREE VARCHAR(255),
		HOURLY_PAY_RATE DECIMAL(38,2),
		BRANCH_ID INT NOT NULL,
		CONSTRAINT pk_baby_sitter PRIMARY KEY (SSN),
		CONSTRAINT fk_baby_sitter FOREIGN KEY (BRANCH_ID) REFERENCES COMPANY(BRANCH_ID) ON DELETE CASCADE
		);";

	try {
		$conn->exec($query1);
		echo "<p style='color:green'>Company table Created Successfully</p>";
	} catch (PDOException $err) {
		echo "<p style='color:red'>Table Creation Failed: " . $err->getMessage() . "</p>\r\n";
	}
	try {
		$conn->exec($query2);
		echo "<p style='color:green'>Baby Sitters table Created Successfully</p>";
	} catch (PDOException $err) {
		echo "<p style='color:red'>Table Creation Failed: " . $err->getMessage() . "</p>\r\n";
	}

	// Close the connection
	unset($conn);

	echo "<a href='../index.html'>Back to the Homepage</a>";

	?>

</body>

</html>