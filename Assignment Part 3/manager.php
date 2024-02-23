<!DOCTYPE html>
<html>
<head>
    <title>EOI Management</title>
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body id="body-manager">
    <?php

    // Connecting to the database
    $conn = mysqli_connect("feenix-mariadb.swin.edu.au", "s100942775", "newpwd", "s100942775_db");



    // Check if the connection was successful
    if (!$conn) 
    {
        echo "Failed to connect to the database: " . mysqli_connect_error();
        exit;
    }



     // Execute the appropriate action based on the button pressed
     if (isset($_GET['action'])) 
     {
        // listing all column in EOI table
         if ($_GET['action'] === 'listAll') 
         {
             // List all EOIs
             executeQuery("SELECT * FROM eoi");
         }





         elseif ($_GET['action'] === 'listByposition') 
         {
            // List EOIs for a specific job reference
            if (isset($_GET['jobReference'])) {
                $jobReference = $_GET['jobReference'];
                executeQuery("SELECT * FROM eoi WHERE position = '$jobReference'");
            } else {
                echo "Please provide a job reference number.";
            }
        }




         // listing all first names & last names 
         elseif ($_GET['action'] === 'listByApplicant') 
         {
             // List EOIs for a specific applicant
             if (isset($_GET['firstName']) || isset($_GET['lastName'])) 
             {
                 $firstName = $_GET['firstName'];
                 $lastName = $_GET['lastName'];
 
                 $whereClause = "";
                 if (!empty($firstName) && !empty($lastName)) 
                 {
                     $whereClause = "WHERE firstName = '$firstName' AND lastName = '$lastName'";
                 } elseif (!empty($firstName)) 
                 {
                     $whereClause = "WHERE firstName = '$firstName'";
                 } elseif (!empty($lastName)) 
                 {
                     $whereClause = "WHERE lastName = '$lastName'";
                 }
                 // 
                 executeQuery("SELECT * FROM eoi $whereClause");
             }
             else 
             {
                //
                 echo "Please provide the first name, last name, or both of the applicant.";
             }
         }
     }





     elseif (isset($_POST['action']) && $_POST['action'] === 'changeStatus') 
     {
        // Get the submitted values
        $eoiNumber = $_POST['eoiNumber'];
        $newStatus = trim($_POST['newStatus']); 

        // Update the status in the database
        if ($newStatus === 'old' || $newStatus === 'new' || $newStatus === 'current' || $newStatus === 'final') 
        {
            $query = "UPDATE eoi SET status = '$newStatus' WHERE EOInumber = '$eoiNumber'";
            $result = mysqli_query($conn, $query);

            // Check for errors
            if ($result === false) 
            {
                echo "Error updating the status: " . mysqli_error($conn);
            } else {
                echo "Status updated successfully!";
            }
        } else {
            echo "Invalid status. Please enter 'old', 'new', 'current', or 'final'.";
        }
    }


    // Delete EOIs for a specific job reference
    if ($_GET['action'] === 'deleteByJobReference') 
    {
        if (isset($_GET['jobReference'])) 
        {
            $jobReference = $_GET['jobReference'];
            $query = "DELETE FROM eoi WHERE position = '$jobReference'";
            $result = mysqli_query($conn, $query);

            // Check for errors
            if ($result === false) 
            {
                echo "Error deleting EOIs: " . mysqli_error($conn);
            } else {
                echo "Deleted successfully from eois Table!";
            }
            } else {
                echo "Please provide a job reference number, for an example REF-PT1 or REF-UID.";
        }
    }



    
    // Function to execute the query and display the results
    function executeQuery($query)
    {
        global $conn;

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check for errors
        if ($result === false) 
        {
            echo "Error executing the query: " . mysqli_error($conn);
            return;
        }
        
        // Check if any rows are returned
        if (mysqli_num_rows($result) > 0) 
        {
            // Output the table headers
            echo "<table class='eoi-table'>";
            echo "<tr>";
            echo "<th>EOI Number</th>";
            echo "<th>position</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Street Address</th>";
            echo "<th>State</th>";
            echo "<th>Postcode</th>";
            echo "<th>Email</th>";
            echo "<th>Phone Number</th>";
            echo "<th>HTMLCSS</th>";
            echo "<th>Java</th>";
            echo "<th>JavaScript</th>";
            echo "<th>Python</th>";
            echo "<th>C</th>";
            echo "<th>Gender</th>";
            echo "<th>Other Skills</th>";
            echo "<th>Status</th>";
            echo "<th>Date of Birth</th>";
            echo "</tr>";

            // Fetch and display each row in a table row
            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo "<tr>";
                // Output the data for each column
                echo "<td>" . $row['EOInumber'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['firstName'] . "</td>";
                echo "<td>" . $row['lastName'] . "</td>";
                echo "<td>" . $row['streetAddress'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['postcode'] . "</td>";
                echo "<td>" . $row['emailAddress'] . "</td>";
                echo "<td>" . $row['phoneNumber'] . "</td>";
                echo "<td>" . $row['HTMLCSS'] . "</td>";
                echo "<td>" . $row['Java'] . "</td>";
                echo "<td>" . $row['JavaScript'] . "</td>";
                echo "<td>" . $row['Python'] . "</td>";
                echo "<td>" . $row['C'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['otherSkills'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['dateofbirth'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            } else {
                // No EOIs were found
                echo "No EOIs found in the table";
            }
    }
    // Close the database connection
    mysqli_close($conn);
?>
<fieldset id="form-for-buttons">
    <h1 id="h1-manager">EOI Management</h1>
    <t>
    <!-- Button to list all EOIs -->
    <form class="form-manager" method="GET" action="manager.php">
        <h2 class="h2-manager-php">List all the column from the EOIs database</h2>
        <input type="hidden" name="action" value="listAll">
        <input type="submit" value="List All EOIs">
    </form>
    <br>
    <br>
    <!--  -->
    <!-- Form to list EOIs by job reference -->
    <form class="form-manager" method="GET" action="manager.php">
        <h2 class="h2-manager-php">List EOI Database by Job Reference</h2>
        <label for="jobReference" class="label-manager">Job Reference:</label>
        <input type="text" name="jobReference" id="jobReference" required>
        <input type="hidden" name="action" value="listByposition">
        <input type="submit" value="List Job Reference">
    </form>
    <br>
    <br>
    <!-- adding form for a particular applicant given their first name, last name or both. -->
    <form class="form-manager"  method="GET" action="manager.php">
        <h2 class="h2-manager-php">Calling First or last name in EOI database</h2>
        <input type="hidden" name="action" value="listByApplicant">
        <label for="firstName" class="label-manager">First Name:</label>
        <input type="text" name="firstName" id="firstName">
        <label for="lastName" class="label-manager">Last Name:</label>
        <input type="text" name="lastName" id="lastName">
        <input type="submit" value="List EOIs">
    </form>
    <br>
    <br>
    <!-- Form to delete EOIs by job reference -->
    <form class="form-manager" method="GET" action="manager.php">
        <h2 class="h2-manager-php">Delete EOIs by Job Reference</h2>
        <input type="hidden" name="action" value="deleteByJobReference">
        <label for="deleteJobReference" class="label-manager">Job Reference:</label>
        <input type="text" name="jobReference" id="deleteJobReference" required>
        <input type="submit" value="Delete EOIs">
    </form>
    <br>
    <br>
    <!-- Form to change the status of an EOI -->
    <form class="form-manager" method="POST" action="manager.php">
    <h2 class="h2-manager-php">Change Status of an EOi</h2>
        <p class="label-manager">when changing status , the database only has 3 option final, current, new Make sure to pick from these option or it will not change anything in the database</p>
        <input type="hidden" name="action" value="changeStatus">
        <label for="eoiNumber" class="label-manager">EOI Number:</label>
        <input type="text" name="eoiNumber" id="eoiNumber" required>
        <label for="newStatus" class="label-manager">New Status:</label>
        <input type="text" name="newStatus" id="newStatus" required>
        <input type="submit" value="Change Status">
    </form>
</fieldset>
<br>
<br>
<br>
<br>
</body>
</html>