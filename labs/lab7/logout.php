<?php
include '../../dbConnection.php';
$conn = getDatabaseConnection();

session_start();

session_destroy();

header("Location: index.php");


?>