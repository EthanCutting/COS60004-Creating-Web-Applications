<?php
/*  
    Ethan PP Cutting
    s100942775


*/
    require_once("settings.php");
    
    // Establish the database connection
    $conn = mysqli_connect($host, $user, $pwd, $sql_db);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $mysql_table = "cars"; // Replace "your_table_name" with the actual table name

    $make = isset($_POST["carmake"]) ? trim($_POST["carmake"]) : "";
    $model = isset($_POST["carmodel"]) ? trim($_POST["carmodel"]) : "";
    $price = isset($_POST["price"]) ? trim($_POST["price"]) : "";
    $yom = isset($_POST["yom"]) ? trim($_POST["yom"]) : "";

    // Debugging statements
    echo "make: $make<br>";
    echo "model: $model<br>";
    echo "price: $price<br>";
    echo "yom: $yom<br>";

    // Check if all required fields are provided
    if (!empty($make) && !empty($model) && !empty($price) && !empty($yom)) {
        $query = "INSERT INTO $mysql_table (make, model, price, yom) VALUES ('$make', '$model', '$price', '$yom')";

        // Execute the query
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Display a success message
            echo "<p class='ok'>Successfully added new car record</p>";
        } else {
            // Display an error message if the query fails
            echo "<p class='wrong'>Something went wrong with the query: " . mysqli_error($conn) . "</p>";
        }
    } else {
        // Display an error message if any required field is empty
        echo "<p class='wrong'>Please fill in all the required fields.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
?>