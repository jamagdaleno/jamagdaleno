<?php

/*
$host = 'localhost'; //cloud 9 database
$dbname = 'quotes';
$username = 'root';
$password = '';
//creates database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//we'll be able to see some errors with database
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

include 'dbConnection.php';
$dbConn = getDatabaseConnection();

//This works but it's very time consuming. Not efficient.
/*
function getRandomQuote_NotEfficient() {
    
    global $dbConn;
    
    $sql = "SELECT quote FROM q_quote ";
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  //retrieves all records;
    
    shuffle($records);
    
    echo $records[0]['quote'];
    //print_r($records);

}
*/


function getRandomQuote() 
{
    global $dbConn;
    
    
    //Retrieve all quote ids
    //Select one quoteid randomly
    //Get the quote for that quoteid
    
    //Step 1: Generating a random quoteid

    $sql = "SELECT `quoteid` FROM `quote` WHERE 1";  //retrieves all quoteids
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  //retrieves all records;
    
    //$records = array (1, 5, 7, 10,  15);
    
    //$randomIndex = rand(0, count($records)-1 );
    $randomIndex = array_rand($records);
    
    //echo($records[$randomIndex]['quoteId']);
    $quoteid = $records[$randomIndex]['quoteid'];
    
    //Step 2: Retreiving quote based on Random Quote Id
    $sql = "SELECT quote, firstName, lastName, authorid 
            FROM quote 
            NATURAL JOIN author
            WHERE quoteid = $quoteid";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute();
    $record = $stmt -> fetch(); //using "fetch()" because it's expected to get ONLY ONE record        
    
    echo  "<em>" . $record['quote']  . "</em><br><br>";
    echo "<a target='authorInfo' href='getAuthorInfo.php". $record['authorid'] . "'>-" . $record['firstName'] . " " . $record['lastName'] . "</a>";
    echo "<br>";
    //print_r($records);

}

//print_r($records);

// while ($row = $stmt -> fetch())  {
//     echo  $row['firstName'] . ", " . $row['lastName'] .  " " . $row['gender'] . "<br />";
// }


?>

<!DOCTYPE html>
<html>
<head>
<title> Lab 5</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    
    <h1>Famous Quotes</h1>
    <h3>A random quote is displayed in every refresh.</h3>
    
    <?=getRandomQuote()?>        

<br>
    <iframe name="authorInfo" width="500" height="300"></iframe>

    </body>
</html>