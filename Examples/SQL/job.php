<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        $dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "Job";
        $username = getenv('C9_USER');
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        // BASIC SELECT
        echo  "BASIC SELECT<br />";
        $sql = "SELECT name, dept-id FROM Department";
        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute ();

        while ($row = $stmt -> fetch())  {
            echo  $row['name'] . ", " . $row['dept-id'] . "<br />";
        }


        ?>
    </body>
</html>