<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        $dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "my_first_db";
        $username = getenv('C9_USER');
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //$sql = " SELECT * FROM table_name WHERE id = :id ";
        $sql = " SELECT * FROM my_first_table";
        $stmt = $dbConn -> prepare ($sql);
        //$stmt -> execute (  array ( ':id' => '1')  );
        $stmt -> execute ();

        while ($row = $stmt -> fetch())  {
            var_dump($row);
            //echo  $row['my_first_column'] . ", " . $row['field2_name'];
        }



        ?>
    </body>
</html>