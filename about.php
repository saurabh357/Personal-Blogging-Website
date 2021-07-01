<?php 

require "admin/includes/dbh.php";

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>About</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader"> 
    	<div id="loader"></div>
    </div>

    <?php include "header-opaque.php"; ?>

    <!-- content
    ================================================== -->
    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry">

                    <div class="s-content__media">
                        <img src="images/thumbs/about/about-1050.jpg" 
                                srcset="images/thumbs/about/about-2100.jpg 2100w, 
                                        images/thumbs/about/about-1050.jpg 1050w, 
                                        images/thumbs/about/about-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">

                    </div> <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title">Learn More About Story.</h1>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__page-content">

                            <p class="lead">
                            'Blog' and 'blogging' are now loosely used for content creation and sharing on social media, especially when the content is long-form and one creates and shares content on regular basis. So, one could be maintaining a blog on Facebook or blogging on Instagram.
                            </p>
                            
                            <p class="lead">
                            This blogging website is mainly for Blog Contents where anyone can add Blog here as requirements.
                            </p> 

                            <br>

                            <div class="row block-large-1-2 block-tab-full s-content__blocks">
                                <div class="column">
                                    <h4>Who?</h4>
                                    <p>
                                    Hello My Name is Saurabh Kamra.Basically I am from Udaipur <b>the City of Lackes</b> Rajasthan
                                    This Blog Website is free for all. 
                                </div>

                                <div class="column">
                                    <h4>When?</h4>
                                    <p>
                                       2021 
                                    </p>
                                </div>

                                <div class="column">
                                    <h4>What?</h4>
                                    <p>
                                    
                                    </p>
                                </div>

                                <div class="column">
                                    <h4>How?</h4>
                                    <p>
                                    Gone through Website Designing and Database Fundamentals 
                                    </p>
                                </div>

                            </div>
                        </div> <!-- end s-entry__page-content -->

                    </div> <!-- end s-content__primary -->
                </article> <!-- end entry -->

            </div> <!-- end column -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->

    <?php include "footer.php"; ?>

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>