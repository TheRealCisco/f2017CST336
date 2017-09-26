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
        <title>HTML Forms</title>
    </head>
    <body>
        <?php
            if ($isPostback) {
                include "username.php";
            }
            else {
                header("Jasons-Special-Header", "He is special");
                include "form.php";
            }
        ?>
    </body>
</html>