<?php

$servername = "127.0.0.1";
$username = "aissani";
$password = "iphone3GPS3";

try {
    $conn = new PDO("mysql:host=$servername;dbname=carDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Bien connecté à carDB"; 
    }
catch(PDOException $e)
    {
    echo "Impossible de se connecter à carDB: " . $e->getMessage();
    }
?>
