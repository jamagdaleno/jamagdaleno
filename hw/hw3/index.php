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
    <?php
    //create function
        function htmlForm()
        {
            if(empty($GET['name']))
            {
                return false;
            }
            
            if(empty($GET['age']));
            {
                return false;
            }
            
            if (empty($_GET['email']));
            {
                return false;
            }
            return true;
        }
        
        function displayForm()
            {
                if(isset($GET['submitForm']));
            }
        function displayReset()
            {
                if(isset($GET['resetForm']));
            }
        
        //variables
        function myVars()
        {
            global $name, $age, $social, $email, $message;
        }
        
        $name = $_GET['name'];
        $age = $_GET['age'];
        $social = $_GET['social'];
        $email = $_GET['email'];
        $message = $_GET['message'];
        
        if (htmlForm())
        {
            echo "Thanks for taking the time to complete my survey," . $name . "!";
        }
        //end of php code
    ?>
    <h2>Survey Time</h2>
    
        <form method="get" action="http://webdevbasics.net/scripts/demo.php">
            
            <label for="Name">Name:</label>
                <input type="text" name="name" alt="Name?" size="20" placeholder="Required" required="required" />
            <hr>
            
            <label for="Age">Age:</label>
                <input type="radio" name="age" alt="Age?" value="<18">< 18
                <input type="radio" name="age" alt="Age?" value="18-29"> 18-29
                <input type="radio" name="age" alt="Age?" value="30-44"> 30-44
                <input type="radio" name="age" alt="Age?" value="45-59"> 45-59
                <input type="radio" name="age" alt="Age?" value="60+"> 60+
            <hr>
            
            <fieldset>
                <legend>What social media sites do you use frequently?</legend>
                    <input type="checkbox" name="color" alt="Social Media" id="Facebook" value="Facebook"> Facebook 
                    <input type="checkbox" name="color" alt="Social Media" id="MySpcae" value="MySpace"> MySpace
                    <input type="checkbox" name="color" alt="Social Media" id="Twitter" value="Twitter"> Twitter<br>
                    <input type="checkbox" name="color" alt="Social Media" id="Pinterest" value="Pinterest"> Pinterest
                    <input type="checkbox" name="color" alt="Social Media" id="Tumblr" value="Tumblr"> Tumblr
                    <input type="checkbox" name="color" alt="Social Media" id="LinkedIn" value="LinkedIn"> Linkedin<br>
                    <input type="checkbox" name="color" alt="Social Media" id="Instagram" value="Instagram"> Instagram
                    <input type="checkbox" name="color" alt="Social Media" id="Snapchat" value="Snapchat"> Snapchat
                    <input type="checkbox" name="color" alt="Social Media" id="None" value="None"> Nada.<br>
            </fieldset>
            <hr>
            
            What email service do you use?<br>
            <select name="Email" id="Email">
                <option value="" selected="selected" alt="Choose one:">Choose one:</option>
                <option value="Gmail" alt="Gmail">Gmail</option>
                <option value="Yahoo" alt="Yahoo">Yahoo</option>
                <option value="Hotmail" alt="Hotmail">Hotmail</option>
                <option value="Other" alt="Other">Other</option>
            </select>
            <hr>
            
            <label for="message">Leave a message?</label>
            <br>
            <textarea name="message" id="message "cols="50" rows="5" maxlength="500"></textarea>
            <br>
            
            <input type="submit" name="formSubmit" alt="Submit button" id="Submit" value="Submit">
            <input type="reset" name="formReset" alt="Reset button" id="Reset" value="Reset">
            <hr>
            
        </form>
    </body>
</html>