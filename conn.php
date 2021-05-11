<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digitalworld";

try {
    $conn = new PDO("mysql:host=$servername;dbname=digitalworld",$username, $password);
    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    // Create connection
$conn2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn2) 
{
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>