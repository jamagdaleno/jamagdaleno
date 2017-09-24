<?php

/*$deck = array();

for($i=1; $i<53; $i++){
  $deck[$i] = $i;
} 
*/

$deck = range(1,52);
shuffle($deck);
print_r($deck);
$totalPoints = 0;

function displayHand() {
    global $deck, $totalPoints;
    $handPoints = 0;
    for ($i = 0 ; $i < 5 ; $i++) {
        $lastCard = array_pop($deck);
        $cardValue = $lastCard % 13;
        $cardSuit;
        if($lastCard <= 13) {
            $cardSuit = "clubs";
        } else if($lastCard > 13 && $lastCard <= 26) {
            $cardSuit = "diamonds";
        } else if($lastCard > 26 && $lastCard <= 39) {
            $cardSuit = "hearts";
        } else if($lastCard > 39) {
            $cardSuit = "spades";
        }
        if($cardValue == 0) {
            $cardValue = 13;
        }
        if ($cardValue == 1) {  //checks whether the card is an ace.
            echo "<img class='ace' src='img/cards/$cardSuit/$cardValue.png' alt='Ace' />";
        }
        else {
            echo "<img src='img/cards/$cardSuit/$cardValue.png' alt='Ace' />";
        }
        // echo $lastCard % 13 . " ";
        $handPoints = $handPoints + $cardValue;
        //$handPoints += $cardValue;   shortcut to add value
        
        //  echo "<img class='ace' src='img/cards/$cardSuit/$cardValue.png' alt='Ace' />";
    }
    echo $handPoints;
    
    $totalPoints = $totalPoints + $handPoints;
    
}


// function displayRandomCard(){
//     //$randomCard = rand(1, 13);
//     $suits = array("clubs","diamonds", "hearts", "spades");
//     //$randSuit = rand(0,3);
//     //echo "<img src='img/cards/$suits[$randSuit]/$randomCard.png' alt='Ace' />";
//     echo "<img src='img/cards/".$suits[rand(0,3)]."/".rand(1, 13).".png' alt='Ace' />";
// }

// for($i=0; $i<5; $i++){
//   displayRandomCard(); 
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker </title>
        <style>
            
            .ace{
                border:yellow 2px solid;
            }
            
            h1, h2, body {
                text-align:center;
            }
            
        </style>
    </head>
    <body>
    
    <h1>Ace Poker</h1>
    <h2>Player with more aces wins all points</h2>
    <?php
    displayHand();
    ?>
    <br>
    <?php
    displayHand();
    ?>
    <h2>Wins:
    <?=$totalPoints?> points!
    </h2>

    </body>
</html>