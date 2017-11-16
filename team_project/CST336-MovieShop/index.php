<?php
    session_start();
    include 'includes/dbConn.php';
    $dbConn = getConnection("team_project");

    if(!isset($_SESSION['movieCart'])){
        $_SESSION['movieCart'] = array();
    }

    function getMovieInfo() {
        global $dbConn;

        $sql = "SELECT * FROM movies p
		        JOIN category b ON p.category_id = b.category_id
		        JOIN inventory i ON p.movie_id = i.movie_id WHERE 1";

		$sql .= " AND type LIKE :type";
		$namedParameters[':type'] = '%' . $_GET['type'] . '%';

		$sql .= " AND gender LIKE :gender";
		$namedParameters[':gender'] = '%' . $_GET['gender'] . '%';

		if (isset($_GET['status']) ) { //"status checkbox was checked"
            $sql .= " AND availability = :availability";
            $namedParameters[':availability'] = 'Y';
        }

        if($_GET['sort'] == 'Name') {
            if(isset($_GET['ascOrDesc']))
                $sql .= " ORDER BY name ASC";
            else
                 $sql .= " ORDER BY name DESC";
        }
        else if($_GET['sort'] == 'Director'){
            if(isset($_GET['ascOrDesc']))
                $sql .= " ORDER BY director ASC";
            else
                $sql .= " ORDER BY name DESC";
        }

        
    }
?>

<!DOCTYPE html>
<html>
    <head>

        <title>Online Pet Store</title>
         <!-- *********************************************************************************** -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- ***************************-->


    <!-- ************************** -->
        <style>
        .jumbotron
        {
          text-align: center;
          background-color: #edae3b;

        }
        .img-circle
        {
          margin-left: auto;
          margin-right:auto;
        }
        body
        {
            background: black;


        }
        #text
        {
            color: white;
            text-align:center;
        }
        #text1
        {
            color:#edae3b;
            text-align:center;
        }
        #table
        {
            color:white;
            text-align:center;
        }


        </style>


    </head>
    <body>
      <div class="jumbotron">
               <h1>Online Movie Store</h1>
              </div>


       
        <div class="row">
 <div class="col-6 col-md-3"></div>
 <div class="col-6 col-md-6">


        <table id="table">

            <?php
                $movies= getMovieInfo();
                echo "<td>" . $movies['name'];
                foreach($movies as $movie) {
                    echo "<tr>";
                    echo "<td>" . $movie['name'] . "</td><td>" . $movie['director'] . "</td><td>" . $movie['availability'] . "</td>";

                    echo "<td><a href='cart.php?petId=".$pet['pet_id']."'>
                     <button type=\"button\" class=\"btn\">
                     Add to Cart
                     </button></a></td>";

                    echo "</tr>";
                }
            ?>
        </table>
      </div>
      <div class="col-6 col-md-3"></div>
</div>
<p class="text-center" >
      <?php
      echo "<a href='cart.php?'>
                         <button type=\"button\" class=\"btn btn-default btn-lg\">
                         <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> View Shopping Cart
                         </button></a>";

      ?>
    </body>
  </p>
</html>
