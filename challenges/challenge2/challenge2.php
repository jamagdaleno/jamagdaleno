<html>
    <head>
        <title>Random Cards</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="challenge2.css">
    </head>
    <body>
        <header><h1>Random Card Game</h1></header>
        <div id="human">
            Human
        </div id="comp">
        <div>
            Computer
        </div>
        <?php
        function displayCard($randomCard){
            if ($randomCard==0) {
                $symbol = "ace";
            } else if ($randomCard==1) {
                $symbol = "jack";
            } else if ($randomCard==2){
                $symbol = "king";
            } else if ($randomCard==3){
                $symbol = "queen";
            } else {
                $symbol = "ten";
            }
        echo "<img src='cards/$symbol.png' alt='$symbol' title='$symbol' id='cards'/>";
        }
        
        $randomCard1 = rand(0,4); // generates random # from 0-2
        displaySymbol($randomCard1); // calls function displaySymbol while passing new var $randomNumber1
    
        $randomCard2 = rand(0,4);
        displaySymbol($randomCard2);
        
        function displayPlayer($randomCard1, $randomCard2){
            $symbol = rand(0,4);
            echo "<img src='$symbol.png' alt='Human Card' id='human'>";
            echo "<img src='$symbol.png' alt='Computer Card' id='comp'>";
            if($randomCard1==$randomCard2){
                echo "It's a tie!";
            } else {
                echo "Try again!";
            }
        }
        
        ?>
    </body>
</html>