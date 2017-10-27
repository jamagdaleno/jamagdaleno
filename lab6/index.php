<?php

   include '../../dbConnection.php';
   $conn = getDatabaseConnection();
   
   function displayCountryOptions() {
       global $conn;
       $sql = "SELECT DISTINCT(country) 
                FROM `q_author` 
                ORDER by country";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        foreach ($records as $record) {
            echo "<option " ;
            
            if ($record['country'] == $_GET['country'] ) {
                echo "selected";
            }
            
            echo ">" . $record['country'] . "</option>";
        }
        
   }
   
   
    function displayCategoryOptions() {
       global $conn;
       $sql = "SELECT * 
                FROM `q_category` 
                ORDER BY category";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        foreach ($records as $record) {
            echo "<option>" . $record['category'] . "</option>";
        }
        
   }
   
   function displayQuotes(){
       global $conn;
       $sql = "SELECT firstName, lastName, quote
                FROM q_author
                NATURAL JOIN q_quote
                NATURAL JOIN q_category
                NATURAL JOIN q_cat_quote
                WHERE 1";
                
        $namedParameters = array();
        
        // QUOTE CONTENT
        if (!empty($_GET['content'])) { // User typed something in search bar      
           
           //The following sql works BUT it allows SQL Injection!!
           //$sql = $sql . " AND quote LIKE '%".$_GET['content']."%'";
           
           //Preventing SQL injection
           $sql = $sql . " AND quote LIKE :quoteContent"; //using named parameters to avoid SQL injection
           $namedParameters[":quoteContent"] = "%" . $_GET['content'] . "%";
        }
        
        // GENDER
        if (isset($_GET['gender'])) { // Gender was checked by user
            
            $sql = $sql . " AND gender = :gender ";
            $namedParameters[':gender'] = $_GET['gender'];
            
            
        }
        
        // BIRTHPLACE - Dropdown (country)
        if(!empty($_GET['country'])) { // Birthplace was selected by the user
            $sql = $sql . " AND country = :country ";
            $namedParameters[":country"] = $_GET['country'];
        }
        
        // CATEGORY - Dropdown (category/Id) 
        if(!empty($_GET['category'])) // Category was selected by the user
        {
            $sql = $sql . " AND category = :category ";
            $namedParameters[":category"] = $_GET['category'];
        }

        // ORDER BY
        if (isset($_GET['orderBy'])) {
        
            if ($_GET['orderBy'] == 'orderByAuthor') {
                
               $sql = $sql . " ORDER BY lastName";
               
            } else {
                
                $sql = $sql . " ORDER BY quote";
            }
        
        }
                
        //echo $sql . "<br><br>";    
        
        
                
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo "<em>" . $record['quote'] . "</em> " . "-" . $record['firstName'] . " " . $record['lastName'] . "<br />";
        }                
                
       
       
   }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Quote Filter</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />

    </head>
    <body>
        <fieldset>
        <legend><h1>Quote Filter</h1></legend>
        <form method="get">
                <strong>Quote Content:</strong>
                <input type="text" name="content" placeholder="Keyword(s)" value="<?=$_GET['content']?>">
                <br>
                <strong>Author's Gender:</strong>
                <input type="radio" name="gender" id="female" value="F"

                <?php 
                
                 if ($_GET['gender'] == 'F') {
                     echo " checked";
                 }
                 
                 ?>
                
                >
                <label for="female">Female</label>
                <input type="radio" name="gender" id="male" value="M"
                
                <?php 
                
                 if ($_GET['gender'] == 'M') {
                     echo " checked";
                 }
                 
                 ?>
                
                >
                <label for="male">Male</label>
                <br>
                <label for="country"><strong>Author's Birthplace:</strong></label>
                <select name="country" >
                    <option value="">Select a Country</option>
                    <?=displayCountryOptions()?>
                </select>
                <br>
                <label for="category"><strong>Quote Category:</strong></label>  
                <select name="category">
                    <option value="">Select a Category</option>
                    <?=displayCategoryOptions()?>
                </select>
                <br>
                <strong>Order Quotes by:</strong>
                 <input type="radio" name="orderBy" id="orderByAuthor" value="orderByAuthor"                <?php 
                
                 if ($_GET['orderBy'] == 'orderByAuthor') {
                     echo " checked";
                 }
                 
                 ?>>
                 
                <label for="orderByAuthor">Author</label>
                 <input type="radio" name="orderBy" id="orderByQuote" value="orderByQuote"                <?php 
                
                 if ($_GET['orderBy'] == 'orderByQuote') {
                     echo " checked";
                 }
                 
                 ?>>
                 
                <label for="orderByQuote">Quote</label> 
                <br><br>
                <input type="submit" value="Filter" name="submit" class="button">
                <button onclick="location.href='index.php'" class="button" type="button">Reset</button>
        </form>
        </fieldset>
        <br>

        <div class="quotes">
            <fieldset>
            <?=displayQuotes()?>
            </fieldset>
        </div>
        
    </body>
</html>