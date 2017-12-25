<?php
/**
 * Created by PhpStorm.
 * User: SMITDOSHI
 * Date: 12/25/17
 * Time: 6:12 PM
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

                            <li>
                                <a href="index.php"> Home </a>
                            </li>

                            <li class="active">
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


        <div id="content"> <!-- content Starts -->

            <div class="container"> <!-- container Starts -->

                <div class="col-md-12"> <!-- col-md-12 Starts -->

                    <ul class="breadcrumb"> <!-- breadcrumb Starts -->

                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="shop.php">Shop</a>
                        </li>

                    </ul> <!-- breadcrumb Ends -->

                </div> <!-- col-md-12 Ends -->

                <div class="col-md-3"> <!-- col-md-3 Starts -->

                    <?php include ("includes/sidebar.php"); ?>

                </div> <!-- col-md-3 Ends -->

                <div class="col-md-9"> <!-- col-md-9 Starts -->

                    <div class="row" id="productMain"> <!-- row Starts -->

                        <div class="col-md-6"> <!-- col-md-6 Starts -->

                            <div id="mainImage"> <!-- mainImage Starts -->

                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators"> <!-- carousel-indicators Starts -->

                                        <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                                        <li data-target="#myCarousel" data-slide-to="1"> </li>
                                        <li data-target="#myCarousel" data-slide-to="2" > </li>
                                        <li data-target="#myCarousel" data-slide-to="3" > </li>
                                        <li data-target="#myCarousel" data-slide-to="4" > </li>

                                    </ol> <!-- carousel-indicators Ends -->

                                    <div class="carousel-inner"> <!-- carousel-inner Starts -->

                                        <div class="item active">

                                            <div align="center">

                                                <img src="admin_panel/product_images/product.jpg" class="img-responsive">

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div align="center">

                                                <img src="admin_panel/product_images/product3.jpg" class="img-responsive">

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div align="center">

                                                <img src="admin_panel/product_images/product4.jpg" class="img-responsive">

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div align="center">

                                                <img src="admin_panel/product_images/product2.jpg" class="img-responsive">

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div align="center">

                                                <img src="admin_panel/product_images/product5.jpg" class="img-responsive">

                                            </div>

                                        </div>

                                    </div> <!-- carousel-inner Ends -->

                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control Starts -->

                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>

                                    </a> <!-- left carousel-control Ends -->

                                    <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- Right carousel-control Starts -->

                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Previous</span>

                                    </a> <!-- Right carousel-control Ends -->

                                </div>

                            </div> <!-- mainImage Ends -->

                        </div> <!-- col-md-6 Ends-->

                        

                    </div> <!-- row Ends -->

                </div> <!-- col-md-9 Ends-->

            </div> <!-- container Ends -->

        </div> <!-- content Ends -->






        <!--- Footer
        ================================================== -->
        <?php
        include ("includes/footer.php");
        ?>

        <!-- Footer Ends -->

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