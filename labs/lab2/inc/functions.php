<?php
    //$symbol = "cherry";
    
    function displaySym($randVal, $pos) 
    //This function displays the symbols && passes random values to each symbol
    {
        /*
        $randNum = rand(0,2); //Generates random number
        
        if ( $randNum == 0 ) 
        {
            $symbol = "seven";
        } 
        else if ( $randNum == 1) 
        {
            $symbol = "cherry";
        } 
        else 
        {
            $symbol = "lemon";
        }
        echo "<img src='img/$symbol.png' alt='$symbol' title="$symbol" width="70"/>";
        */
        switch ($randVal) 
        {
            case 0: $symbol = "seven";
                break;
            case 1: $symbol = "cherry";
                break;
            case 2: $symbol = "lemon";
                break;
            case 3: $symbol = "grapes";
            //default: 
                //echo $symbol;
        }
        echo "<img id='reel$pos' src='img/$symbol.png' title='" . ucfirst($symbol) . "' alt='$symbol' width='69'/>";
    }

    function displayPts($randVal1,$randVal2, $randVal3)
    //This function distributes points to each value
    {
        
        echo "div id='output'>";
        
        if ($randVal1 == $randVal2 && $randVal2 == $randVal3)
        //To check if any symbols match
        {
            switch ($randVal1) 
            {
                case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
                case 1: $totalPoints = 500;
                    break;
                case 2: $totalPoints = 250;
                    break;
                case 3: $totalPoints = 900;
            }
            echo "<h2>You won $totalPoints points!</h2>";
        }
        else 
        {
            echo "<h1> Try Again! </h1>";
        }
        echo "</div>";
    }
    
    function play() 
    {
        for ($i=1; $i<4; $i++) 
        {
            ${"randVal" . $i} = rand(0,3);
            displaySym(${"randVal" . $i}, $i );
            //Calls function
        }
    
    /*
    $randVal1 = rand(0,2); //Generates random number
    displaySym($randVal1); //call displaySym() function
    
    $randVal2 = rand(0,2); //Generates random number
    displaySym($randVal2); 
    
    $randVal3 = rand(0,2);
    displaySym($randVal3); 
    
    echo "The random values are: <br> ";
    echo  $randVal1 . "  <br />  "  . $randVal2 . " <br /> " . $randVal3;
    */
    
    displayPts($randVal1,$randVal2, $randVal3);
    //Calls function
    }
?>