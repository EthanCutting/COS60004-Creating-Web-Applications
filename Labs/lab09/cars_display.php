<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Lab 10"  />
    <meta name="keywords" content="PHP, File, input, output" />
    <link rel="stylesheet" href="addcar.css" type="text/css" />
    <title>Retrieving records to HTML</title>
</head>
<body>
    <?php
    /*  
    Ethan PP Cutting
    s100942775


*/
    require_once("settings.php");

    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    // checks if connection is successful
    if (!$conn) {
        // display an error message
        echo "<p> Database connection failure</p>";
    } else {
        // upon successful connection
        $sql_table = "cars";

        // Check if a search query is submitted
        if (isset($_GET['make']) || isset($_GET['model']) || isset($_GET['price'])) {
            // Prepare the search criteria
            $make = isset($_GET['make']) ? $_GET['make'] : '';
            $model = isset($_GET['model']) ? $_GET['model'] : '';
            $price = isset($_GET['price']) ? $_GET['price'] : '';

            // Build the SQL query with search criteria
            $query = "SELECT make, model, price FROM cars WHERE make LIKE '%$make%' AND model LIKE '%$model%' AND price LIKE '%$price%' ORDER BY make, model";
        } else {
            // No search criteria provided, retrieve all records
            $query = "SELECT make, model, price FROM cars ORDER BY make, model";
        }

        // execute the query and store the result into the result pointer
        $result = mysqli_query($conn, $query);

        // checks if the execution was successful
        if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
        } else {
            // display the retrieved records
            echo "<table border=\"1\">\n";
            echo "<tr>\n"
                . "<th scope=\"col\">Make</th>\n "
                . "<th scope=\"col\">Model</th>\n "
                . "<th scope=\"col\">Price</th>\n "
                . "</tr>\n ";

            // retrieve current record pointed by the result pointer
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>\n ";
                echo "<td>", $row["make"], "</td>\n";
                echo "<td>", $row["model"], "</td>\n";
                echo "<td>", $row["price"], "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>\n ";

            // Frees up the memory, after using the result pointer
            mysqli_free_result($result);
        } // if successful query operation

        // close the database connection
        mysqli_close($conn);
    } // if successful database connection
    ?>
</body>
</html>

