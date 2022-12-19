<!doctype html>
<html>
<head>
    <title>Display Records of a table</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <?php
    $servername = "localhost";
    $dbname = "baby_and_kid_care_company_DB";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color:green'>Connection Was Successful</p>";
    } catch (PDOException $err) {
        echo "<p style='color:red'> Connection Failed: " . $err->getMessage() . "</p>\r\n";
    }

    try {
        $sql = "SELECT SSN, FULL_NAME, DATE_OF_BIRTH, NATIONALITY, GENDER, AVAILABLE_DAY_OF_WEEK, AVAILABLE_START_TIME, AVAILABLE_END_TIME, OTHER_OCCUPATION, HIGHEST_EDUCATION_DEGREE, HOURLY_PAY_RATE, BRANCH_ID FROM BABY_SITTER";
        $stmnt = $conn->prepare($sql);    

        $stmnt->execute();

        $row = $stmnt->fetch();  // fetches the first row of the table
        if ($row) {      // if there is any result from the query
            echo '<table>';
            echo '<tr> <th>SSN</th> <th>Name</th> <th>Birth Date</th> <th>Nationality </th> <th>Gender</th>
                        <th>AVAILABLE_DAY_OF_WEEK</th> <th>AVAILABLE_START_TIME</th> <th>AVAILABLE_END_TIME</th> <th>OTHER_OCCUPATION</th> <th>HIGHEST_EDUCATION_DEGREE</th>
                        <th>HOURLY_PAY_RATE</th> <th>BRANCH_ID</th> </tr>';
            do {
                echo "<tr><td>$row[SSN]</td><td>$row[FULL_NAME]</td><td>$row[DATE_OF_BIRTH]</td><td>$row[NATIONALITY]</td><td>$row[GENDER]</td>
                <td>$row[AVAILABLE_DAY_OF_WEEK]</td><td>$row[AVAILABLE_START_TIME]</td><td>$row[AVAILABLE_END_TIME]</td><td>$row[OTHER_OCCUPATION]</td><td>$row[HIGHEST_EDUCATION_DEGREE]</td>
                <td>$row[HOURLY_PAY_RATE]</td><td>$row[BRANCH_ID]</td></tr>";
            } while ($row = $stmnt->fetch());     // fetches another row from the query result, until we reach to the end of the result
            echo '</table>';
        } else {
            echo "<p> No Record Found!</p>";
        }
    } catch (PDOException $err) {
        echo "<p style='color:red'>Record Retrieval Failed: " . $err->getMessage() . "</p>\r\n";
    }
    // Close the connection
    unset($conn);

    echo "<a href='../index.html'>Back to the Homepage</a>";

    ?>
</body>

</html>