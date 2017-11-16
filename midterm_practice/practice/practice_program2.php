 <?php
    $dbHost = getenv('IP');
    $dbPort = 3306;
    $dbName = "midterm";
    $username = getenv('C9_USER');
    $password = "";
        
    $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    $sql = "select * from mp_town  WHERE population BETWEEN 50000 AND 80000";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ();

    while ($row = $stmt -> fetch())  {
        echo  $row['town_name'] ." "." - ". $row['population'] . "<br />";
        echo "<br />";
    
    }
    
    
    $sql = "SELECT * From mp_town Order By population DESC";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ();

    while ($row = $stmt -> fetch())  {
        echo  $row['town_name'] ." ".$row['county_name']." - ". $row['population'] . "<br />";
        
    }
    echo "<br />";
    
    $sql = "SELECT county_name, SUM(population) FROM mp_county GROUP BY county_name"; 
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ();
    while($row = mysql_fetch_array($result)){
	    echo $row['county_name']. "  ". $row['SUM(population)'];
    	echo "<br />";
    }
    
?>
