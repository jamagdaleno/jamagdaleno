<!DOCTYPE html>
<html>
<head>
<title> Author Info </title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<?php

    include 'dbConnection.php';

    $conn = getDatabaseConnection();

    $sql = "SELECT * FROM author WHERE authorid=" . $_GET['authorid'];
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $record = $stmt -> fetch();

    echo "img src='" . $record['picture'] . "' width='200px'>";
    
    echo "<div><span class='bolder'>Name: </span>" . $record['firstName'] . " " . $record['lastName'] . "</div>";
    echo "<div><span class='bolder'>Gender: </span>" . $record['gender'] . "</div>";
    echo "<div><span class='bolder'>Date of Birth: </span>" . $record['dob'] . "</div>";
    echo "<div><span class='bolder'>Date of Death: </span>" . $record['dod'] . "</div>";
    echo "<div><span class='bolder'>Profession: </span>" . $record['profession'] . "</div>";
    echo "<div><span class='bolder'>Country: </span>" . $record['country'] . "</div>";
    echo "<div><span class='bolder'>Biography: </span>" . $record['biography'] . "</div>";
    echo "<br>";
    
?>
</body>
</html>