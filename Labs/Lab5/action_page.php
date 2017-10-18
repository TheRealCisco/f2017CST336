<?php
if ( isset( $_GET['submit'] ) ) { 
$filter = $_GET['filter']; 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <header>
        <center>
        Online Store
        </center>
    </header>
     <br></br>
    <body id="body">
    <main>
        <center>
    <form action="action_page.php" method="get">
        <div id="filter">
        <fieldset>
            <legend>Sort By</legend>
            <input type="radio" name="filter" value="Name"> Name<br>
            <input type="radio" name="filter" value="Type"> Type<br>
            <input type="radio" name="filter" value="availability"> availability<br>
            <input type="radio" name="filter" value="price"> price<br>
        </fieldset>
        </div>
         <input id="button" type="submit" name="submit" />
    </form>
    </center>
    <br></br>
    <center>
        <div id="container">
            <center>
        <?php
        $dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "Lab5";
        $username = getenv('C9_USER');
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        // BASIC SELECT
        $sql = "SELECT * From Device Order By $filter";
        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute ();

        while ($row = $stmt -> fetch())  {
            echo  $row['Name'] . "<br />" ."Type: ". $row['Type'] . "<br />";
    
            echo "Availability: ". $row['availability'] .  "<br />" ."Price: ". $row['price'] . "<br />";
            echo "_____________________________________________________________________<br />";
        }
        
        ?>
        </center>
        </div>
    </main>
    </body>
</html>