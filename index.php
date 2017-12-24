<?php
/**
 * Created by PhpStorm.
 * User: SMITDOSHI
 * Date: 12/21/17
 * Time: 7:29 AM
 */

?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

    <head>

        <!--- basic page needs
       ================================================== -->
        <meta charset="utf-8">
        <title>E Commerce </title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!--- Linking Google Fonts
       ================================================== -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">


        <!--- Linking Bootstrap
       ================================================== -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="style/bootstrap.min.css">

        <!--- Linking Font Awesome
       ================================================== -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <!--- Linking CSS Styling Sheet
        ================================================== -->

        <link rel="stylesheet" href="style/index.css">

    </head>

    <body>

        <div id="top"> <!-- Top Start -->

            <div class="container"> <!-- Container Start -->

                <div class="col-md-6 offer"> <!-- col-md-6 offer Start -->

                    <a href="#" class="btn btn-success btn-sm">
                        Welcome: Guest
                    </a>

                    <a href="#">
                        Shopping Cart Total Price: $100, Total items 2
                    </a>
                </div> <!-- col-md-6 offer End -->

                <div class="col-md-6"> <!-- col-md-6 Start -->

                    <ul class="menu"> <!-- menu Starts -->

                        <li>
                            <a href="customer_register.php">
                                Register
                            </a>
                        </li>

                        <li>
                            <a href="checkout.php">
                                My Account
                            </a>
                        </li>

                        <li>
                            <a href="cart.php">
                                Go to Cart
                            </a>
                        </li>

                        <li>
                            <a href="checout.php">
                                Login
                            </a>
                        </li>

                    </ul> <!-- menu Ends -->

                </div> <!-- col-md-6 End -->

            </div> <!-- Container Close -->

        </div> <!-- Top END -->

        <div class="navbar navbar-default" id="navbar"> <!-- navbar navbar-default Start -->

            <div class="container"> <!-- container Starts -->

                <div class="navbar-header"> <!-- navbar-header Start -->

                    <a class="navbar-brand home" href="index.php"> <!-- navbar-brand home Start -->

                        <img src="#" alt="Compnay Logo" class="hidden-xs">
                        <img src="#" alt="Company Logo" class="visible-xs">

                    </a> <!-- navbar-brand home Ends -->

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                        <span class="sr-only">Toogle Navigation </span>

                        <i class="fa fa-align-justify"></i>

                    </button>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button>

                </div> <!-- navbar-header End -->

                <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Starts -->

                    <div class="padding-nav"> <!-- Padding Nav Starts -->

                        <ul class="nav navbar-nav navbar-left"> <!-- nav navbar-nav navbar-left Starts -->

                            <li class="active">
                                <a href="index.php"> Home </a>
                            </li>

                            <li>
                               <a href="shop.php"> Shop</a>
                            </li>

                            <li>
                                <a href="checkout.php"> My Account</a>
                            </li>

                            <li>
                                <a href="cart.php"> Shopping Cart</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>

                        </ul> <!-- nav navbar-nav navbar-left Ends -->

                    </div> <!-- Padding Nav Ends -->

                    <a class="btn btn-primary navbar-btn right" href="cart.php"> <!-- btn btn-primary navbar-btn right Starts -->

                        <i class="fa fa-shopping-cart"></i>

                        <span>  4 items in cart </span>

                    </a> <!-- btn btn-primary navbar-btn Ends -->

                    <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right Starts -->

                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

                            <span class="sr-only">Toggle Search</span>

                            <i class="fa fa-search"></i>

                        </button>

                    </div> <!-- navbar-collapse collapse right Ends -->

                    <div class="collapse clearfix" id="search"> <!-- collapse clearfix Starts -->

                        <form class="navbar-form" method="get" action="results.php"> <!-- navbar-form Starts -->

                            <div class="input-group"> <!-- input-group Starts -->

                                <input class="form-control" type="text" placeholder="Search" name="user_query" required>

                                <span class="input-group-btn"> <!-- input-group-btn Starts -->

                                    <button type="submit" value="Search" name="search" class="btn btn-primary">

                                        <i class="fa fa-search"></i>

                                    </button>

                                </span> <!-- input-group-btn Ends -->

                            </div> <!-- input-group Ends -->

                        </form> <!-- navbar-form Ends -->

                    </div> <!-- collapse clearfix Ends -->

                </div> <!-- navbar-collapse collapse Ends -->

            </div> <!-- container Ends -->

        </div> <!-- navbar navbar-default Ends -->

        <!--- Main Seaction
        ================================================== -->

        <div class="container" id="slider"> <!-- Container Starts -->

            <div class="col-md-12"> <!-- col-md-12 starts -->

                <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide Starts -->

                    <ol class="carousel-indicators"> <!-- carousel-indicators Starts -->

                        <li data-target="#myCarousel" data-slide-to ="0" class="active"></li>

                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>

                    </ol> <!-- carousel-indicators Ends -->

                    <div class="carousel-inner"> <!-- carousel-inner Starts -->

                        <div class="item active">
                            <img src="admin_panel/carousel_images/3.jpeg">
                        </div>

                        <div class="item">
                            <img src="admin_panel/carousel_images/4.jpeg">
                        </div>

                        <div class="item">
                            <img src="admin_panel/carousel_images/5.jpeg">
                        </div>
                        <div class="item">
                            <img src="admin_panel/carousel_images/6.jpeg">
                        </div>

                    </div> <!-- carousel-inner Ends -->

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <!-- left carousel-control Starts -->

                        <span class="glyphicon glyphicon-chevron-left"></span>

                        <span class="sr-only"> Previous </span>
                    </a> <!-- left carousel-control Ends  -->

                    <a class="right carousel-control" href="#myCarousel" data-slide="next"> <!-- right carousel-control Starts -->

                        <span class="glyphicon glyphicon-chevron-right"></span>

                        <span class="sr-only"> Previous </span>
                    </a> <!-- right carousel-control Ends  -->

                </div> <!-- carousel slide Ends -->

            </div> <!-- col-md-12 Ends -->

        </div> <!-- Container Ends -->


        <div id="advantages"> <!-- advantages Starts -->

            <div class="container"> <!-- Container Starts -->

                <div class="same-height-row">  <!-- same-height-row Starts -->

                    <div class="col-sm-4"> <!-- col-sm-4 Starts -->

                        <div class="box same-height"> <!-- box same-height Starts -->

                            <div class="icon">

                                <i class="fa fa-heart"></i>

                            </div>

                            <h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>
                            <p>
                                We are known to provide best possible service ever
                            </p>

                        </div> <!-- box same-height Ends -->

                    </div> <!-- col-sm-4 Ends -->

                    <div class="col-sm-4"> <!-- col-sm-4 Starts -->

                        <div class="box same-height"> <!-- box same-height Starts -->

                            <div class="icon">

                                <i class="fa fa-tags"></i>

                            </div>

                            <h3><a href="#"> BEST PRICES </a></h3>

                            <p>
                                You can check on all other sites about the prices and than compare with us.
                            </p>

                        </div> <!-- box same-height Ends -->

                    </div> <!-- col-sm-4 Ends -->

                    <div class="col-sm-4"> <!-- col-sm-4 Starts -->

                        <div class="box same-height"> <!-- box same-height Starts -->

                            <div class="icon">

                                <i class="fa fa-thumbs-up"></i>

                            </div>

                            <h3><a href="#"> 100% SATISFACTION GURANTEED </a></h3>

                            <p>
                                Free returns on everything for 3 months.
                            </p>

                        </div> <!-- box same-height Ends -->

                    </div> <!-- col-sm-4 Ends -->

                </div> <!-- same-height-row Ends -->

            </div> <!-- Container Ends -->

        </div> <!-- advantages Ends -->

        <div id="hot"> <!-- hot Starts -->

            <div class="box"> <!-- box Starts -->

                <div class="container"> <!-- container Starts-->

                    <div class="col-md-12"> <!-- col-md-12 Starts -->

                        <h2> New Arrivals </h2>

                    </div> <!-- col-md-12 Ends -->

                </div> <!-- container Ends-->

            </div> <!-- box Ends -->

        </div> <!-- hot Ends -->


        <!--- Linking Bootstrap CDN
       ================================================== -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--- Linking jQuery File
        ================================================== -->
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <!--- Linking Javascript File
          ================================================== -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>

</html>