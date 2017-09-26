<?php
    session_start();
    
    // If this is a post, process it
    $isPostback = $_SERVER['REQUEST_METHOD'] == 'POST';
    
    if ($isPostback) {
        $_SESSION["report"] = $report;
    }
    else {
        $_SESSION["report"] = "";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Complaints</title>
    </head>
    <body>
        <?php
            if ($isPostback) {
                include "inc.report.php";
            }
            else {
                header("Jasons-Special-Header", "He is special");
                include "inc.form.php";
            }
        ?>
        
        <div>
            <a href="logout.php" >Logout</a>
        </div>
    </body>
</html>