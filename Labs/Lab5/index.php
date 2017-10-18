<!DOCTYPE html>
<html>
    <head>
        <title>
            Online Store
            
        </title>
          <link href="style.css" rel="stylesheet" type="text/css" />
        <header>
            <center>
            Online Store
            </center>
        </header>
    </head>
    <br></br>
    <body id="body">
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
    <center id="container">
        <?php
        $dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "Lab5";
        $username = getenv('C9_USER');
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        // BASIC SELECT
        $sql = "SELECT * From Device Order By Name";
        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute ();

        while ($row = $stmt -> fetch())  {
            echo  $row['Name'] . "<br />" ."Type: ". $row['Type'] . "<br />";
    
            echo "Availability: ". $row['availability'] .  "<br />" ."Price: ". $row['price'] . "<br />";
            echo "_____________________________________________________________________<br />";
        }
        ?>
    </center>
    </body>
</html>