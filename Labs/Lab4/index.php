<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2: LED Board </title>
        <link href="style.css" rel="stylesheet" type="text/css" />

    </head>

       <main>
        <h1> Custom LED Board</h1>
   
          <form method="get">
          	  Message: <input name="message" maxlength="15" value="Enter Words Here" type="text"> <br><br>
          	  Select a color: 
          	   <select name="color">
          	   	  <option value="red"> Red </option>
          	   	  <option value="green"> Green </option>
          	   	  <option value="blue"> Blue </option>
          	   	  <option value="yellow" selected=""> Yellow </option>
          	   </select>
          	   <br><br>
          	  Display Different Color per Cell: 
          	  Yes <input name="colorPerCell" value="yes" type="radio">
          	  No <input name="colorPerCell" value="no" type="radio">
          	  <br><br>
          	 <input name="displayForm" value="yes" checked="" type="checkbox"> Display Form Again
          	  <br>
          	   <br>
          	   Display custom colors per word:<br>
          	   (Enter colors names or hexadecimal values)<br>
          	    <input name="wordColor[]" value="" type="text"> 
          	    <input name="wordColor[]" value="" type="text">
          	    <input name="wordColor[]" value="" type="text">
          	    <br><br>
          	  <input value="Display!!" name="submit" type="submit">
          </form>
          
           <br>
           
           <div class="error">'Display a different color per cell' must be answered </div>           
            <br>
            <table border ="0";>
                <tbody>
                    <?php
                        for($i=0;$i<maxlength;$i++){
                            echo "<td style='background-color:red'/>";
                        }
                    ?>
                </tbody>
            </table>
        </main>

    

</html>