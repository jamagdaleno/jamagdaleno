<?php

echo "<h1>Homework 2</h1>";
$checkerboard=array();
    for($row=0;$row<10;$row++)
    {
    if($row%2==0)
    {
        for($col=0;$col<10;$col++)
        {
            if($col%2==0)
            {
                $checkerboard[$row][$col]="transparent";
            }
            else
            {
                $r = rand(0,4);
                switch($r) {
                    case 0:
                        $checkerboard[$row][$col]="blue";
                        break;
                    case 1:
                        $checkerboard[$row][$col]="00ff18";
                        break;
                    case 2:
                        $checkerboard[$row][$col]="yellow";
                        break;
                    case 3:
                        $checkerboard[$row][$col]="red";
                        break;
                    case 4:
                        $checkerboard[$row][$col]="fc00ff";
                        break;
                }
            }
        }
    }
    else
    {
        for($col=0;$col<10;$col++)
        {
            if($col%2==0)
            {
                $r = rand(0,2);
                switch($r) {
                    case 0:
                        $checkerboard[$row][$col]="red";
                        break;
                    case 1:
                        $checkerboard[$row][$col]="00ff18";
                        break;
                    case 2:
                        $checkerboard[$row][$col]="blue";
                        break;
                }
            }
            else
            {
                $checkerboard[$row][$col]="transparent";
            }
        }
    }
}
$diagonal=array();
    for($row=0;$row<10;$row++)
    {
        for($col=0;$col<10;$col++)
        {
            if($row==$col)
            {
                $diagonal[$row][$col]='transparent';
            }
            else
            {
                $diagonal[$row][$col]='transparent';
            }
            if($row+$col==9)
            {
                $diagonal[$row][$col]='transparent';
            }
        }
    }
echo "<table>";
for($row=0;$row<count($checkerboard);$row++)
{
    echo "<tr>";
        for($col=0;$col<count($checkerboard);$col++)
        {
            echo "<td width='50px' height='50px' bgcolor='".$checkerboard[$row][$col]."'></td>";
        }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "<h2>SORT:</h2>";
echo "<br>";

sort($checkerboard);

echo "<br />";

echo "<table>";
for($row=0;$row<count($checkerboard);$row++)
{
    echo "<tr>";
        for($col=0;$col<count($checkerboard);$col++)
        {
            echo "<td width='50px' height='50px' bgcolor='".$checkerboard[$row][$col]."'></td>";
        }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "<h2>SHUFFLE:</h2>";
echo "<br>";

shuffle($checkerboard);
echo "<br />";

echo "<table>";
for($row=0;$row<count($checkerboard);$row++)
{
    echo "<tr>";
        for($col=0;$col<count($checkerboard);$col++)
        {
            echo "<td width='50px' height='50px' bgcolor='".$checkerboard[$row][$col]."'></td>";
        }
    echo "</tr>";
}
echo "</table>";




?>



<!DOCTYPE html>
<html>
    <head>
        <title>Homework 2</title>

        <link rel="stylesheet" href="styles.css">
        
    </head>
    <body>
    </body>
</html>