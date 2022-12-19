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
	$sql="INSERT INTO BABY_SITTER VALUES (:ssn, :bname, :bdate, :nationality, :gender,:dayofweek, :starttime, :endtime, :otheroccupation,
	 :educationdegree,:payrate, :bid);";   
	$stmnt = $conn->prepare($sql);    
	$stmnt->bindParam(':ssn', $_POST['ssn']);     
	$stmnt->bindParam(':bname', $_POST['bname']);   
	$stmnt->bindParam(':bdate', $_POST['bdate']);
	$stmnt->bindParam(':nationality', $_POST['nationality']);
	$stmnt->bindParam(':gender', $_POST['gender']);
	$stmnt->bindParam(':dayofweek', $_POST['dayofweek']);
	$stmnt->bindParam(':starttime', $_POST['starttime']);   
	$stmnt->bindParam(':endtime', $_POST['endtime']);
	$stmnt->bindParam(':otheroccupation', $_POST['otheroccupation']);
	$stmnt->bindParam(':educationdegree', $_POST['educationdegree']);
	$stmnt->bindParam(':payrate', $_POST['payrate']);
	$stmnt->bindParam(':bid', $_POST['bid']);

	$stmnt->execute();

	echo "<p style='color:green'>Data Inserted Into baby sitter table Successfully</p>";
}
catch (PDOException $err ) {
	echo "<p style='color:red'>Data Insertion Failed: " . $err->getMessage() . "</p>\r\n";
}
// Close the connection
unset($conn);

echo "<a href='../insert_baby_sitter_data.html'>Insert More Values</a> <br />";

echo "<a href='../index.html'>Back to the Homepage</a>";

?>

</body>
</html>