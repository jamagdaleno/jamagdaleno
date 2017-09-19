<?php


    
    //$symbol = "cherry";
    
    function displaySymbol($randomValue, $pos){
        
        if ( $randomNumber == 0 ) {
            $symbol = "seven";
        } else if ( $randomNumber == 1) {
            $symbol = "cherry";
        } else {
            $symbol = "lemon";
        } 
        
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title=\"$symbol\" width=\"70\"/>";
        
    }
    
    //Displays number of points player has won
    function displayPoints($randomValue1,$randomValue2, $randomValue3, $randomValue4){
        
        //checking if the four symbols are the same
        
        if ($randomValue1 != $randomValue2) {
            
            echo "<h1> Try Again! </h1>";
            
        }
        
        
    }

    
    
    $randomValue1 = rand(0,2); //Generates random number
    displaySymbol($randomValue1, $pos); //call displaySymbol() function
    
    $randomValue2 = rand(0,2); //Generates random number
    displaySymbol($randomValue2, $pos); 
    
    $randomValue3 = rand(0,2);
    displaySymbol($randomValue3, $pos); 
    
    $randomValue4 = rand(0,2);
    displaySymbol($randomValue4, $pos);
    
    echo "<br> The random values are: <br><br> ";
    echo  $randomValue1 . "  <br />  "  . $randomValue2 . " <br /> " . $randomValue3 . " <br /> " . $randomValue4;
    
    
    displayPoints($randomValue1,$randomValue2, $randomValue3, $randomValue4);
  
    
    ?>

      
<!DOCTYPE html>
<html>
    <head>
        <title> The rare 7777 Slot Machine </title>
        <meta charset="utf-8" />
        <style>
        /*
        @import url("css/styles.css");
        */
        </style>
    </head>
    <body>
    
    <div id ="main">
<img id='reel1' src='img/lemon.png' alt='lemon' title='Lemon' width='70' >
<img id='reel2' src='img/orange.png' alt='oranges' title='Oranges' width='70' >
<img id='reel3' src='img/grapes.png' alt='grapes' title='Grapes' width='70' >
<img id='reel2' src='img/cherry.png' alt='cherry' title='Cherry' width='70' >
    <?php
        
        for ($i=1; $i<4; $i++){
        ${"randomValue" . $i } = rand(0,2);
        displaySymbol(${"randomValue" . $i}, $i );
        }
        
    ?>
    <form>
        <input type="submit" value="Spin"/>
    </form>
    </div>

    </body>
</html>