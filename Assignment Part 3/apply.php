<!--
    Master Of Cyber Security
    cos6004-Creating Web Applications
    Ethan PP Cutting
    100942775


-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="styles/styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="Contact Page">
    <meta name="keywords" content="Contact ">
    <meta name="author" content="Ethan PP Cutting ">
    <script src="scripts/apply.js"></script>

    <title>Apply</title>
  </head> 

  <body class="feedback">
  <?php
    include("header.inc");
  ?>

    <!-- adding header 1 and styling it in the center -->
    <div class="h1">
      <h1>Apply for U.I.D</h1>
    </div>
    <hr>
    <!-- adding div and p with some words in it -->
    <div id="p">
      <p>Welcome to U.I.D (user interface D) fill out registration.
       After you have complete your registraction and upload your CVV click the submit button.<br> 
       Please make sure you fill in all of the information same as what is on your CV(Resume). Thank you for filling out the Applications can't wait to work with you.
      </p>
    </div>

    <form id="apply_form" method="POST" action="processEOI.php" >
      <!-- Fieldset 1-->
      <fieldset id="fielset-apply-1">
        <!-- adding a legend -->
        <legend id="contact-info">Contact Info</legend>
        <div class="info-master">
          <!-- adding a label and input so the user can put their frist name down -->
          <label id="firstnames">First Name:</label>
          <input for="fname" type="text" id="fname"  name="fname" placeholder="Enter your first name here" minlength="2" maxlength="20">
          <br>
          <br>
          <!-- adding a label an input so the user can put their last name down -->
          <label id="lastnames">Last Name:</label>
          <input type="text" id="lastname"  name="lastname" placeholder="Enter your last name here" pattern="[A-Za-z]+" >
          <br>
  
          <br>
          <!-- adding a label an input so the user can put their email down -->
          <label id="emails">Email:</label>
          <input type="email" id="email"  name="email" placeholder="Enter your email here">
          <br>
       
        <!-- addong a label an input so the user can put their phone number downn -->
        <label id="Phonenumber">Phone No:</label>
          <input type="text" id="phoneno" name="phoneno" placeholder="Enter your phone number here" minlength="10" maxlength="10" >
          <br>

        <!-- adding a label and input so the user can put their date of birth down -->
        <label>Date Of Birth:</label>
          <input type="text" id="dob" name="dateofbirth"  placeholder="dd/mm/yyyy">
          <br>
          <span id="dobError"></span> <span id="ageError"></span>
          <br>
          <br>
          
        <!-- adding a div and option to pick gender with radio no checkbox -->
        <div id="gender-index">
            <label class="gender-label" name="gender">Gender:</label><br>
            <input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
            <input type="radio" name="gender" value="other"/>Other
            <br>
          </div>
          
          <!-- addong a label and input so the user can put their street address down -->
          <label id="street-address">Street Address:</label>
            <input type="text" id="streetaddress" name="streetaddress" placeholder="Enter your street address" maxlength="40" minlength="4">
        </div>
        <!-- adding postcode and putting them into a div together so i can float them next to each other -->
        <div class="postcode-sub">
            <label id="right">Postcode:</label>
              <input type="text" name="postcode" id="postcode" pattern="^\d{4}$" placeholder="Enter your postcode" >
            <!-- adding a drop down option so the user can pick what state they are from-->
            <label for="state">State:</label>
              <select id="state" name="state">
                <option value="Please Select...">Please Select...</option>
                <option value="New South Wales">New South Wales</option>
                <option value="Victoria">Victoria</option>
                <option value="Western Australia">Western Australia</option>
                <option value="South Australia">South Australia</option>
                <option value="Tasmania">Tasmania</option>
              </select>
        </div>
        <span id="postcodeError"></span>
    </fieldset>

    <br>
    <!-- Fieldset 2-->
    <fieldset id="fielset-apply-2">
      <!-- adding legend saying upload resume -->
      <legend id="upload-resume">Education</legend>
      <div class="product-master">
          <!-- adding a actiong_.php so the user can upload resume -->
          <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
          </form>
          </div>
          <br>
          <!--  adding a checbox for Skill's -->
         <!--  adding a checkbox for Skills -->
        <div id="div-skills">
          <label class="skills">Skills:</label><br>
            <input type="checkbox" name="htmlcss" id="skill-html-css"/>HTML/CSS
            <input type="checkbox" name="java" id="skill-java"/>Java
            <input type="checkbox" name="javascript" id="skill-javascript"/>JavaScript
            <input type="checkbox" name="python" id="skill-python"/>Python
            <input type="checkbox" name="c" id="skill-c"/>C
            <input type="checkbox" name="Others" id="otherSkillsCheckbox" value="Others" id="skill-others"/>Others
        </div>

        <br>

        
          <div id="state-master-jobs">
          <label type="name">Jobs Reference:</label>
		      <input type="text1" id="jobReference" name="position" value="" readonly>
        </div>
        <br>


          <!-- adding a comment box for other skills so user can add whatever skills i missed to put down-->
        
          <label class="comment-boxes">Other Skills</label>
            <textarea rows="4" cols="100" id="commentboxs" name="otherSkills" placeholder="Please enter other skills here..." ></textarea>
          <span id="otherskillsError"></span>
        <!-- adding a apply button so user can submit their resume -->
        <br>
        <br>
        <button type="submit" value="Sumbit" name="myButton" id="applybutton">Apply</button>


     </fieldset>
    </form>

  <?php
      include("footer.inc");
  ?>
 </body>
</html>