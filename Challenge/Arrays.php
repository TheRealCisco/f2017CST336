<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        
            $cards = array();
            
            $card1["suit"] = "Hearts";
            $card1["value"] = 10;
            $cards[] = $card1;
            
            $card2["suit"] = "Hearts";
            $card2["value"] = 9;
            array_push($cards, $card2);
            
            // $card3["suit"] = "Hearts";
            // $card3["value"] = 9;
            // array_push($cards, $card2);
            
            // $card4["suit"] = "Hearts";
            // $card4["value"] = 9;
            
            array_push($cards, $card2);
            foreach($cards as $card) {
                foreach($card as $key => $value) {
                    echo "$key = $value<br />";
                }
            }
            
            for ($i = 0; $i < 100; $i++) {
                echo "<br />";
                var_dump(array_keys($cards[0]));
            }
        ?>

    </body>
</html>