<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
        
    <?php
    
    //$symbol = "cherry";
    
    function displaySymbol($randomNumber){
        
        //$randomNumber = rand(0,2); //Generates random number
        
        if ( $randomNumber == 0 ) {
            $symbol = "seven";
        } else if ( $randomNumber == 1) {
            $symbol = "cherry";
        } else {
            $symbol = "lemon";
        }
        
        echo "<img src='img/$symbol.png' alt='$symbol' title=\"$symbol\" width=\"70\"/>";
        
    }
    
    //Displays number of points player has won
    function displayPoints($randomValue1,$randomValue2, $randomValue3){
        
        //checking if the three symbols are the same
        
        if ($randomValue1 != $randomValue2) {
            
            echo "<h1> Try Again! </h1>";
            
        }
        
        
    }
    
    
    
    $randomValue1 = rand(0,2); //Generates random number
    displaySymbol($randomValue1); //call displaySymbol() function
    
    $randomValue2 = rand(0,2); //Generates random number
    displaySymbol($randomValue2); 
    
    $randomValue3 = rand(0,2);
    displaySymbol($randomValue3); 
    
    echo "The random values are: <br> ";
    echo  $randomValue1 . "  <br />  "  . $randomValue2 . " <br /> " . $randomValue3;
    
    
    displayPoints($randomValue1,$randomValue2, $randomValue3);
  
    
    ?>

      
     
    </body>
</html>