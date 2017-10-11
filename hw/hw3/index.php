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
            
            if (empty($_POST['email']));
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
        //create variables
        $name = $_POST['name'];
        $age = $_POST['age'];
        $social = $_POST['social'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        

        //                      end of php code and start of html code
    ?>
    <h2>Survey Time</h2>
    <hr>
        <form method="get" action="inc/returnData.php">
            
            <label for="Name"><span class="question">Name:</span></label>
                <input type="text" name="name" alt="Name?" size="20" placeholder="Required" required="required" />
            <hr>
            
            <label for="Age"><span class="question">Age:</span></label>
                <input type="radio" name="age" alt="Age?" value="<18">< 18
                <input type="radio" name="age" alt="Age?" value="18-29"> 18-29
                <input type="radio" name="age" alt="Age?" value="30-44"> 30-44
                <input type="radio" name="age" alt="Age?" value="45-59"> 45-59
                <input type="radio" name="age" alt="Age?" value="60+"> 60+
            <hr>
            
            <fieldset name="social">
                <legend name="social"><span class="question">What social media sites do you use frequently?</span></legend>
                    <input type="checkbox" name="social" alt="Social Media" id="Facebook" value="Facebook"> Facebook 
                    <input type="checkbox" name="social" alt="Social Media" id="MySpcae" value="MySpace"> MySpace
                    <input type="checkbox" name="social" alt="Social Media" id="Twitter" value="Twitter"> Twitter
                    <input type="checkbox" name="social" alt="Social Media" id="Pinterest" value="Pinterest"> Pinterest
                    <input type="checkbox" name="social" alt="Social Media" id="Tumblr" value="Tumblr"> Tumblr
                    <input type="checkbox" name="social" alt="Social Media" id="LinkedIn" value="LinkedIn"> Linkedin
                    <input type="checkbox" name="social" alt="Social Media" id="Instagram" value="Instagram"> Instagram
                    <input type="checkbox" name="social" alt="Social Media" id="Snapchat" value="Snapchat"> Snapchat
                    <input type="checkbox" name="social" alt="Social Media" id="None" value="None"> None of these.
            </fieldset>
            <hr>
            
            <span class="question">What email service do you use?</span><br>
            <select name="email" id="email">
                <option value="" selected="selected" alt="Choose one:">Choose one:</option>
                <option value="Gmail" alt="Gmail">Gmail</option>
                <option value="Yahoo" alt="Yahoo">Yahoo</option>
                <option value="Hotmail" alt="Hotmail">Hotmail</option>
                <option value="Other" alt="Other">Other</option>
            </select>
            <hr>
            
            <label for="message"><span class="question">Leave a message?</span></label>
            <br>
            <textarea name="message" id="message "cols="50" rows="5" maxlength="500"></textarea>
            <br>
            
            <input type="submit" name="formSubmit" alt="Submit button" id="Submit" value="Submit">
            <input type="reset" name="formReset" alt="Reset button" id="Reset" value="Reset">
            <hr>
            
        </form>
    </body>
</html>