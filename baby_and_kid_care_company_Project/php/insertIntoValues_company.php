<!doctype html>
<html>
<head>
	<title>Insert Data Into a Database</title>
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
$servername ="localhost";
$dbname = "baby_and_kid_care_company_DB";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Sets the error mode of PHP engine to Exception to display all the errors
	echo "<p style='color:green'>Connection Was Successful</p>";
}
catch (PDOException $err) {
	echo "<p style='color:red'>Connection Failed: " . $err->getMessage() . "</p>\r\n";
}
try {
	$sql="INSERT INTO COMPANY VALUES (:branchid,:branchname);";   
	$stmnt = $conn->prepare($sql);    
	$stmnt->bindParam(':branchid', $_POST['branchId']);    
	$stmnt->bindParam(':branchname', $_POST['branchName']);  
	$stmnt->execute();
	echo "<p style='color:green'>Data Inserted Into company table Successfully</p>";
}
catch (PDOException $err ) {
	echo "<p style='color:red'>Data Insertion Failed: " . $err->getMessage() . "</p>\r\n";
}
// Close the connection
unset($conn);

echo "<a href='../insert_company_data.html'>Insert More Values</a> <br />";

echo "<a href='../index.html'>Back to the Homepage</a>";

?>

</body>
</html>