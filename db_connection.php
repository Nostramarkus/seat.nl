<?php
/*
Zeer gevaarlijk om je database credentials open en bloot te hosten op GitHub ;)
*/
$servername = "localhost";
$username = "root";
$password = "root";
$database = "seat";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully: <br>"; 
    }
catch(PDOException $e)
    {
    // echo "Connection failed: " . $e->getMessage();
    }
    
?>
