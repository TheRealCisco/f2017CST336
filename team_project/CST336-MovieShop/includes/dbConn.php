<?php

function getConnection($dbname)
{
    $dbHost = getenv('IP');
    $dbPort = 3306;
    
    $username = getenv('C9_USER');
    $password = "";

    try {
        //Creating database connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        //Setting Errorhandling to Exception
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "There was a problem connecting to the database. Error: " . $e;
        exit();
    }
    return $dbConn;
}
?>