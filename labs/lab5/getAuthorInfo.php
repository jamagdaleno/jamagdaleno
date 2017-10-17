<?php

include '../../dbConnection.php';

$conn = getDatabaseConnection();

$sql = "SELECT * FROM `q_author` WHERE authorId=" . $_GET['authorId'];
$stmt = $conn -> prepare ($sql);
$stmt -> execute();
$record = $stmt -> fetch();

    echo "<br>";
    //display image
    echo "<img src='" . $record['picture'] . "' width='200px'><br>";

    //display name
    echo "<strong>" . $record['firstName'] . " " . $record['lastName'] . "</strong><br>";
    //display info
    echo "<br><span class='bolder'>Sex</span>" . ": " . $record['gender'] . "<br>";
    echo "<span class='bolder'>Date of Birth</span>" . ": " . $record['dob'] . "<br>";
    echo "<span class='bolder'>Date of Death</span>" . ": " . $record['dod'] . "<br>";
    echo "<span class='bolder'>Profession</span>" . ": " . $record['profession'] . "<br>";
    echo "<span class='bolder'>Country</span>" . ": " . $record['country'] . "<br><br>";
    //display bio
    echo "<span class='bolder'>Biography</span><br>" . $record['biography'] . "<br><br>";

?>

<!DOCTYPE html>
<html>
<head>
    <title> Author Info </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    
    
    
</body>
</html>