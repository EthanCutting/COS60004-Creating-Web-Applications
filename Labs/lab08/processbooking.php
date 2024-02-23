<!DOCTYPE html>
<head>
    <title>Booking Confirmation</title>
    <body>
        <h1>rohirrim tour booking Confirmation</h1>
        <!-- Begin processing -->
        <?php

        function sanitise_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


            // Firstname and Lastname PHP
            if(isset($_POST["firstname"]) && isset($_POST["lastname"])) 
            {
                $firstname = sanitise_input($_POST["firstname"]);
                $lastname = sanitise_input($_POST["lastname"]);

            }
            else 
            {
                header("location: register.html");
                // making exit for after redirection
                exit();
            }



           // Booking PHP
           if(isset($_POST["booking"])) 
           {
                $booking = $_POST["booking"];
            }
            else 
            {
            }


            // Species PHP
            if(isset ($_POST["species"])) 
            {
                $species = $_POST["species"];
            }
            else {
                $species = "Unknown species";
            }




            // Age PHP
            // checks if process was triggered by a form submit, if not display an error message
            if(isset ($_POST["age"])) 
            {
                $age = $_POST["age"];
            }
            else{
                // display error message, if process not triggered by a form submit
            }
            // assign the rest of the form values to PHP variables here...





            // Food PHP
             // checks if process was triggered by a form submit, if not display an error message
             if(isset ($_POST["food"])) 
             {
                $food = $_POST["food"];
            }
            else{
                // display error message, if process not triggered by a form submit
            }
            // assign the rest of the form values to PHP variables here...





             // checks if process was triggered by a form submit, if not display an error message
             if(isset ($_POST["partySize"])) 
             {
                $partySize = $_POST["partySize"];
            }
            else{
                // display error message, if process not triggered by a form submit
            }
            // assign the rest of the form values to PHP variables here...
            


            // errMsg 
            $errMsg = "";
            // validate firstname 
            if ($firstname=="")
            {
                $errMsg .= "<p>You must enter your first name.</p>";
            }
            else if (!preg_match("/^[a-zA-Z]*$/",$firstname))
            {
                $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
            }

            // validate Lastname 
            if ($lastname=="")
            {
                $errMsg .= "<p>You must enter your Last name.</p>";
            }
            else if (!preg_match("/^[a-zA-Z]*$/",$lastname))
            {
                $errMsg .= "<p>Only alpha letters allowed in your Last name.</p>";
            }
            

            // Validate age 
            if (isset($_POST["age"])) 
            {
                $age = $_POST["age"];
                if (!is_numeric($age) || $age < 10 || $age > 10000) 
                {
                    $errMsg .= "<p>Age must be a numeric value between 10 and 10,000.</p>";
                }
            }
            else 
            {
                $errMsg .= "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
            }
            



            // calling the error
            if($errMsg != "")
            {
                echo "<p>$errMsg</p>";
            }
            else 
            {
                echo "<p> Welcome $firstname $lastname ! <br />
                    You are now booked on the $booking <br />
                    Species: $species<br />
                    Age: $age<br />
                    Meal Preference: $food<br/>
                    Number of travellers: $partySize</p>";
            }
            

            
            ?>
    </body>
</html>