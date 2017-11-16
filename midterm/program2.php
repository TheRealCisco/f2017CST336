  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>2</td>
      <td>Number of movies per category and their average duration</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>3</td>
      <td>All info about the top three longest movies released after 2000</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
       <td>4</td>
       <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    



 <?php
    $dbHost = getenv('IP');
    $dbPort = 3306;
    $dbName = "midterm";
    $username = getenv('C9_USER');
    $password = "";
    $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    echo "Name and country of birth of female actresses who were NOT born in the USA, ordered by last name (10 points)<br />";

    $sql = "SELECT * FROM celebrity 
        WHERE gender = 'F'
        AND country_of_birth != 'USA'
        ORDER BY lastName";
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();

    foreach ($results as $record) {
	    echo $record['firstName']  . " " .$record['lastName'] . " " .  $record['country_of_birth'] . "<br />";
    }

    echo "<br /> Top three longest movies released after 2000 (15 points) <br />";

    $sql = "SELECT * FROM movie m 
        LEFT JOIN oscar o ON m.movieId = o.movieId
        WHERE m.release_year > 2000
        ORDER BY m.duration DESC
        LIMIT 3";
        
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();

    foreach ($results as $record) {
	echo $record['movie_title'] . " " . $record['movie_category'] . " " . $record['duration'] . " " . $record['company'] . " " . $record['release_year'] . "<br />";
    }

    echo "<br /> List of celebrities who have won an oscar, ordered by 'award_year'. Include full name, movie title, oscar year, and award category. (15 points) <br />";

    $sql = "SELECT * FROM celebrity c
        JOIN oscar o ON c.celebrityId = o.celebrity_id
        JOIN movie m ON o.movieId = m.movieId
        JOIN award_category a ON o.award_cat_id = a.award_cat_id
        ORDER BY o.award_year";
        
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();

    foreach ($results as $record) {
	    echo $record['firstName'] . "\t" . $record['lastName'] . "\t" . $record['movie_title'] . "\t" . $record['award_category'] . "\t" . $record['award_year'] . "<br />";
    }

   /* echo "List of actors and actresses who have not won an academy award, ordered by last name (15 points) <br />";

    $sql = "SELECT * FROM celebrity c
        JOIN oscar o ON c.celebrityId != o.celebrity_id
        JOIN movie m ON o.movieId = m.movieId
        JOIN award_category a ON o.award_cat_id = a.award_cat_id
        ORDER BY o.award_year";
        
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();

    foreach ($results as $record) {
	    echo $record['firstName']  . " " .$record['lastName'] . "<br />";
    }*/

?>