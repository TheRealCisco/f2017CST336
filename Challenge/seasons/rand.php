<html>
    <head>
        <style>
            th{
                text-align: center;
                padding: 20px;
                border: 1px solid black;
                background-color: #f1f1c1;
            }
            header{
                text-align:center;
                padding:20px;
                border: 1px solid black;
                background-color: black;
                color:white;
            }
            #top{
                text-align:center;
                padding:20px;
                border: 1px solid black;
                background-color: navy;
                color:white;
            }
        </style>
    </head>
    <header style="width:46%">
        Random Number Generator
    </header>
<body>
<table style="width:50%">
    <tr >
        <th id="top">
            Numbers
        </th>
        <th id="top">
            Odd or Even?
        </th>
        
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>
<tr>
    <th>
        <?php
        $digits_needed=9;
        $random_number='';
        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 100);
            $random_number .= $random_digit;
            $count++;
        }
        echo $random_digit;

    ?>
<th>
    <?php
            if ($random_digit % 2 == 0) {
            print " Even";
        }
        else
            print " Odd"
        ?>
</th>
</th>
    </tr>    
  
</table>  
</body>
    
    
</html>
