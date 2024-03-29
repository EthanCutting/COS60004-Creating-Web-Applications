<!--
    Master Of Cyber Security
    cos6004-Creating Web Applications
    Ethan PP Cutting
    100942775
-->
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Home</title>
        <link href="styles/styles.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="description" content="Contact Page">
        <meta name="keywords" content="Contact ">
        <meta name="author" content="Ethan PP Cutting ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="scripts/enhancements.js"></script>
    </head>
<body id="body-enhancement">
        <?php 
            include("header.inc");
        ?>
        
        <br>
    <section id="section-enh">
        <div class="enhancements-div">
            <h2 class="h2-enh">Image I used</h2>

            <a href="jobs.html">
                <img class="e-2" src="images\2091374.jpg" alt="2091374.webp" >
            </a>

            <!-- adding about us img when click on the img it will link to about us pages -->
            <a href="about.html">
                <img class="e-1" src="images\About-Us1.jpg" alt="About-Us1.jpg" >
            </a>

            <!-- adding about us img 2 when click on the img it will link to about us pages -->
            <a href="apply.html">
                <img class="e-1" src="images\appy.jpg" alt="appy.jpg" >
            </a>

            <!-- adding about us img 3 when click on the img it will link to about us pages -->
            <a href="index.html">
                <img class="e-1" src="images\istockphoto-1279104620-612x612.jpg" alt="istockphoto-1279104620-612x612.jpg" >
            </a>
            
            <h2 class="h2-enh">Images and research I used for Creating Web Application assigment</h2>
            <label id="legend-enhancements">HTML and CSS Resarch</label>
            <ol>
                <li class="li-enh"><a href="https://www.w3schools.com/html/html_tables.asp">Tables</a></li>
                <li class="li-enh"><a href="https://www.w3schools.com/tags/tag_fieldset.asp">Frieldset</a></li>
                <li class="li-enh"><a href="https://www.w3schools.com/tags/tag_label.asp">Label</a></li>
                <li class="li-enh"><a href=" https://www.w3schools.com/html/html_links.asp">Links</a></li>
                <li class="li-enh"><a href=" https://www.w3schools.com/html/html_links.asp">Ordered-listed</a></li>
                <li class="li-enh"><a href=" https://www.w3schools.com/html/html_lists_unordered.asp">Unordered-listed</a></li>
                <li class="li-enh"><a href=" https://developer.mozilla.org/en-US/docs/Web/CSS/flex-grow">Adding Grow</a></li>
                <li class="li-enh"><a href=" https://css-tricks.com/how-to-create-neon-text-with-css0/">Dot Points</a></li>
                <li class="li-enh"><a href=" https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_dd_default_css">DD & DL </a></li>
                <li class="li-enh"><a href=" https://www.emailonacid.com/blog/article/email-development/emailology_media_queries_demystified_min-width_and_max-width/">Media </a></li>
            </ol>
            <br>
            <h2 class="h2-enh-2">Enhancements</h2>

            <aside id="aside-enhancement-2">
                <label class="enh-label"><strong>1. Key Frames:</strong></label>
                <ul id="ul-enhancement-2">
                    <li class="li-enh"><strong>Beyond the requirements of the assignment</strong></li>
                    <p class="p-enh">I added keyframes to the CSS animation, causing the 'Enhancements' header to move to the right by 200 pixels.</p>
                    <li class="li-enh"><strong>code to implement feature</strong></li>
                    <p class="p-enh">@keyframes mymove {from {left: 0px;}to {left: 200px;}}</p>

                </ul>
            </aside>
            <br>
            <aside id="aside-enhancement-3">
                <label class="enh-label"><strong>2. Glow for Headers:</strong></label>
                <ul id="ul-enhancement-3">
                    <li class="li-enh"><strong>Beyond the requirements of the assignment</strong></li>
                    <p class="p-enh">by adding glow for the headers it give a unqiue style</p>
                    <li class="li-enh"><strong>code to implement feature</strong></li>
                    <p class="p-enh">
                    .h2-enh, .h2-enh-2, .h2-enh-1 {
                        color: #fff;
                        text-shadow:
                            0 0 7px rgb(23, 111, 242),
                            0 0 10px rgb(23, 111, 242),
                            0 0 21px rgb(23, 111, 242),
                            0 0 42px rgb(23, 111, 242),
                            0 0 82px rgb(23, 111, 242),
                            0 0 92px rgb(23, 111, 242),
                            0 0 102px rgb(23, 111, 242),
                            0 0 151px rgb(23, 111, 242);
                      }
                      <br>
                    </p>
                </ul>
            </aside>
            <br>
            <aside id="aside-enhancement-3">
                <label class="enh-label"><strong>2. Media:</strong></label>
                <ul id="ul-enhancement-3">
                    <li class="li-enh"><strong>Beyond the requirements of the assignment</strong></li>
                    <p class="p-enh">Adding media keeps the pages and elements all the same size.</p>
                    <li class="li-enh"><strong>code to implement feature</strong></li>
                    <p class="p-enh">
                        @media (min-width: 1920px) {
                            #body-enhancement {
                              font-size: 15px;
                              width: 100%;
                             
                            }
                            #body-index {
                              font-size: 14px;
                              width: 100%;
                          
                            }
                            #jobs-about {
                              font-size: 12px;
                              width: 100%;
                           
                            }
                            .feedback {
                              font-size: 15px;
                              width: 100%;
                           
                            }
                            #about {
                              font-size: 15px;
                              width: 100%;
                          
                            }
                          
                          }
                          <br>
                          <br>
                          @media (min-width: 2560px) {
                            /* Styles for 32-inch screens */
                            #body-enhancement {
                              font-size: 18px;
                              width: 100%;
                            }
                            #body-index {
                              font-size: 16px;
                              width: 100%;
                            }
                            #jobs-about {
                              font-size: 14px;
                              width: 100%;
                            }
                            .feedback {
                              font-size: 18px;
                              width: 100%;
                            }
                            #about {
                              font-size: 18px;
                              width: 100%;
                            }
                          }
                    </p>
                </ul>
            </aside>
            <hr>
            <br>
            <br>
            <h1 class="h1slideshow">Slide Show With JavaScript</h1>
            <div class="slideshow-container">
              <img class="slide active" src="images/1_H8GZ235Q2TL8nTk3i0D03w.jpg">
              <img class="slide" src="images/hack.jpg">
              <img class="slide" src="images/logo-no-background.png">
            </div>
        </div>
    </section>

    <?php
            include("footer.inc");
    ?>

    </body>
</html>