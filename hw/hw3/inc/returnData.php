<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 3</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <meta name="author" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
    </head>
    <body>
        <p><?php echo "Thanks for taking the time to complete my survey, " . $_GET["name"] . "!"; ?></p>
        
        <p>Selected age range: <?php echo $_GET["age"]; ?></p>
        
        <p>Selected social media site(s): <?php echo $_GET["social"]; ?></p>
        <?php
        /*
        if(empty($_GET['social'])) 
        {
            return false;
        }
        // Counting number of checked checkboxes.
        $social = count($_GET['social']);
        echo "You have selected following ". $social ." option(s): <br>";
        // Loop to store and display values of individual checked checkbox.
        foreach($_GET['social'] as $social) 
        {
            echo "<p>" . $social . "</p>";
        }
        */
        ?>
        
        <p>Email selected: <?php echo $_GET["email"]; ?></p>
        
        <p>Your message: <?php echo $_GET["message"]; ?></p>
    </body>
</html>