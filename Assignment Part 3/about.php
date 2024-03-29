<!--
    Master Of Cyber Security
    cos6004-Creating Web Applications
    Ethan PP Cutting
    100942775
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="styles/styles.css" rel="stylesheet"> <!-- links to css -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact Page">
    <meta name="keywords" content="Contact ">
    <meta name="author" content="Ethan PP Cutting ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title> <!-- adding title will pop up on the tab -->
</head>

<!-- body -->
<body id="about">
    <?php
        include("header.inc");
    ?>
    <fieldset id="about_frieldset">
    <!-- Making a Timetable -->

    <!-- image of Ethan 100K -->
    <img id="LEGO_logo" src="images/ethan.jpg" alt="LEGO_logo.svg.png">
    <h1 id="about_h1">2023 Semester 1 Timetable</h1>
    <!-- adding dd method -->
      <dl>
        <dt class="dd-name"><strong>Name:</strong></dt>
        <dd class="dd-name">Ethan PP Cutting</dd>
      </dl>
      <dl>
        <dt class="unit-name"><strong>Unit Name:</strong></dt>
        <dd class="unit-name">cos60004-Creating Web Applications</dd>
      </dl>
      <dl>
        <dt class="tutors"><strong>Tutor's:</strong></dt>
        <dd class="tutors">Zeqian Dong</dd>
      </dl>
      <dl>
        <dt class="coursename"><strong>Course Name:</strong></dt>
        <dd class="coursename">Master Of CyberSecurity</dd>
      </dl>
         <!-- adding a link to my email -->
         <a href="100942775@student.swin.edu.au"><strong>Email me at:</strong>  100942775@student.swin.edu.au</a>
        <br>
        <br>
        <br>

    <!-- Fieldset will have table inside -->
   
        <!-- adding a table so i can put my uni days -->
        <table class="timetable">
            <!-- top layer with week days -->
            <tr>
                <th class="td1">
                <b></b>
            </th>
        
            <th>
                <b>Monday</b>
            </th>
            
            <th>
                <b>Tuesday</b>
            </th>
            
            <th>
                <b>Wed</b>
            </th>
            
            <th>
                <b>Thursday</b>
            </th>
            
            <th>
                <b>Friday</b>
            </th>
            
            <th>
                <b>Saturday</b>
            </th>
            
            <th>
                <b>Sunday</b>
            </th>
        </tr>
        <!-- adding the times on the side of the table -->
        <tr>
            <td>8:00 am</td>
            <td></td>
            <td></td>
            <td class="cos60010-2">cos60010-Workshop (2) - Hawthorn EN 409</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>9:00 am</td>
            <td></td>
            <td></td>
            <td class="cos60010-2">cos60010-Workshop (2) - Hawthorn EN 409</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>10:00 am</td>
            <td></td>
            <td></td>
            <td class="cos60010-2">cos60010-Workshop (2) - Hawthorn EN 409</td>
            <td class="cyb70001">cyb70001-Tutorial 1 (2) Hawthorn</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>11:00 am</td>
            <td></td>
            <td class="cos60010">cos60010-Live Online Lecture 1 (1)</td>
            <td></td>
            <td class="cyb70001">cyb70001-Tutorial 1 (2) Hawthorn</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>12:00 pm</td>
            <td></td>
            <td class="cos60010">cos60010-Live Online Lecture 1 (1)</td>
            <td></td>
            <td class="cyb70001">cyb70001-Tutorial 1 (2) Hawthorn</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>1:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>2:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>3:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>4:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>5:00 pm</td>
            <td class="cos60004">cos60004-Live Online Lecture 1 (1) - Hawthorn ONLINE</td>
            <td class="cos60004-2">cos60004-Class 1 (4) - Hawthorn BA 601</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>6:00 pm</td>
            <td class="cos60004">cos60004-Live Online Lecture 1 (1) - Hawthorn ONLINE</td>
            <td class="cos60004-2">cos60004-Class 1 (4) - Hawthorn BA 601</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>7:00 pm</td>
            <td class="cos60004">cos60004-Live Online Lecture 1 (1) - Hawthorn ONLINE</td>
            <td class="cos60004-2">cos60004-Class 1 (4) - Hawthorn BA 601</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>8:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>9:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>10:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>11:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>12:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        </table>
    <!-- end of the fieldset :) -->
    </fieldset>
    <?php
            include("footer.inc");
    ?>
        </body>
</html>