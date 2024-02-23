<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Learning Basics PHP">
    <meta name="keyword"    content="PHP with HTML">
    <meta name="author" content="Ethan PP Cutting - 100942775">
    <title> PHP Basics </title>
</head>
<body>
<?php
    include ("mathfunctions.php");
?>
<!-- header 1    -->
<h1> Creating Web Application - Lab 8 </h1>
<?php
/* 
   Author:  Ethan PP Cutting - 100942775
*/
    if(isset($_GET["number"])) 
    {
        $n = $_GET["number"];
        if(isPositiveInteger($n)){
        echo "<p>", $n, "! is ", factorial ($n),".</p>";
    }   else {
        echo "<p> Please enter a positve integer.</p>";
        }
    }
    echo   "<p><a href='factorial.html'> Return to the Entry Page></a></p>";
?>
</body>
</html>

