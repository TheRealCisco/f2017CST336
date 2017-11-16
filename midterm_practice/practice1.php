<?php
function displayBalls($rows, $columns)
{
    $arrs = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    shuffle($arrs);
    $arr = array();
    if($_GET['8ball'] == 'ascending')
    {
        $arr2 = array();
        for($i = 0; $i < ($rows * $columns); $i++)
        {
            $arr2[] = array_pop($arrs);
        }
        sort($arr2);
        for($i = 0; $i < ($rows * $columns); $i++)
        {
            $arr[] = array_pop($arr2);
        }
    }
    else if($_GET['8ball'] == 'descending')
    {
        for($i = 0; $i < ($rows * $columns); $i++)
        {
            $arr[] = array_pop($arrs);
        }
        sort($arr);
    }
    else{
        $arr = $arrs;
    }
    $evenPoints = 0;
    $oddPoints = 0;
    echo "<table>";
    for($i = 0; $i < $rows; $i++)
    {
        echo "<tr>";
        for($j = 0; $j < $columns; $j++)
        {
            $value = array_pop($arr);
            if($value % 2 == 0) {
                echo "<td style='background-color:yellow;'>" . "<img src='billiards/" . $value . ".png'></td>";
                $evenPoints += $value;
            }
            else {
                echo "<td style='background-color:green;'>" . "<img src='billiards/" . $value . ".png'></td>";
                $oddPoints += $value;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    
    echo "Even ball points: " . $evenPoints . " - Odd ball points: " . $oddPoints . "<br />";
    if($evenPoints > $oddPoints)
    {
        echo "Even ball wins!";
    }
    else if ($evenPoints < $oddPoints)
    {
        echo "Odd ball wins!";
    }
    else {
        echo "It's a tie!";
    }
}

function isFormSubmitted()
{
    if(empty($_GET['row']) || empty($_GET['column']))
    {
        return false;
    }
    
    return true;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Program 1</title>
        <style>
            @import url("styles_1.css");
        </style>
    </head>
    <body>
         <h1>Billiards: Even vs Odd!</h1>
            <hr />
            <?php
                if(isFormSubmitted() == false)
                    displayBalls(3,3);
                else {
                    displayBalls($_GET['row'], $_GET['column']);
                }
            ?>
            <h2>Customize Output</h2>
            <form>
                Rows: <input type="text" name="row" size="5" maxlength="1" placeholder="Type number" value="">
                Columns: <input type="text" name="column" size="5" maxlength="1" placeholder="Type number" value="">
                (values must not exceed 4)
                <br />
                
                <input type="checkbox" name="8ball"> Include 8 ball
                <br />
                
                Order balls:
                <input type="radio" name="8ball" value="ascending"> Ascending
                <input type="radio" name="8ball" value="descending"> Descending
                <button type="submit">Display</button>
            </form>
            
    </body>
</html>