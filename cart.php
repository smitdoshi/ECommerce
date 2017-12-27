<?php
/**
 * Created by PhpStorm.
 * User: SMITDOSHI
 * Date: 12/25/17
 * Time: 11:41 PM
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

                        <li>
                            <a href="shop.php"> Shop</a>
                        </li>

                        <li>
                            <a href="checkout.php"> My Account</a>
                        </li>

                        <li  class="active">
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
                        <a href="shop.php">Cart</a>
                    </li>

                </ul> <!-- breadcrumb Ends -->

            </div> <!-- col-md-12 Ends -->

            <div class="col-md-9" id="cart">  <!-- col-md-9 Starts -->

                <div class="box"> <!-- box starts -->

                    <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- form Starts -->

                        <h1> Shopping Cart </h1>

                        <p class="text-muted"> You currently have 3 item(s) in your cart.</p>

                        <div class="table-responsive"> <!-- table-responsive Starts -->

                            <table class="table"> <!-- table Starts -->

                                <thead> <!-- thead starts -->

                                    <tr>

                                        <th colspan="2">Product</th>

                                        <th>Quantity</th>

                                        <th>Unit Price</th>

                                        <th>Size</th>

                                        <th colspan="1">Delete</th>

                                        <th colspan="2">Sub Total</th>

                                    </tr>

                                </thead> <!-- thead closed-->

                                <tbody> <!-- tbody Starts -->

                                    <tr> <!-- tr start -->

                                        <td>

                                            <img src="admin_panel/product_images/product.jpg" class="img-responsive">

                                        </td>

                                        <td>
                                            <a href="#">Keep Calm and Smile On.</a>

                                        </td>

                                        <td>
                                            2 <!-- quantity -->
                                        </td>

                                        <td>
                                            $55.00 <!-- price -->
                                        </td>

                                        <td>
                                            Large <!-- size -->
                                        </td>

                                        <td>

                                            <input type="checkbox"name=" remove[]"> <!-- remove item -->

                                        </td>

                                        <td>

                                            $110.00 <!-- total price -->

                                        </td>

                                    </tr> <!-- tr Ends -->

                                    <tr> <!-- tr start -->

                                        <td>

                                            <img src="admin_panel/product_images/product.jpg" class="img-responsive">

                                        </td>

                                        <td>
                                            <a href="#">Keep Calm and Smile On.</a>

                                        </td>

                                        <td>
                                            2 <!-- quantity -->
                                        </td>

                                        <td>
                                            $55.00 <!-- price -->
                                        </td>

                                        <td>
                                            Large <!-- size -->
                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]"> <!-- remove item -->

                                        </td>

                                        <td>

                                            $110.00 <!-- total price -->

                                        </td>

                                    </tr> <!-- tr Ends -->

                                    <tr> <!-- tr start -->

                                        <td>

                                            <img src="admin_panel/product_images/product.jpg" class="img-responsive">

                                        </td>

                                        <td>
                                            <a href="#">Keep Calm and Smile On.</a>

                                        </td>

                                        <td>
                                            2 <!-- quantity -->
                                        </td>

                                        <td>
                                            $55.00 <!-- price -->
                                        </td>

                                        <td>
                                            Large <!-- size -->
                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]"> <!-- remove item -->

                                        </td>

                                        <td>

                                            $110.00 <!-- total price -->

                                        </td>

                                    </tr> <!-- tr Ends -->

                                </tbody> <!-- tbody Ends -->

                                <tfoot> <!-- tfoot Starts -->

                                    <tr>

                                        <th colspan="5">Total</th>

                                        <th colspan="2"> $100.00</th>

                                    </tr>

                                </tfoot> <!-- tfoot Ends -->

                            </table> <!-- table closed -->

                        </div> <!-- table-responsive Ends -->

                        <div class="box-footer"> <!-- box-footer Starts -->

                            <div class="pull-left"> <!-- pull-left Starts -->

                                <a href="index.php" class="btn btn-default">

                                    <i class="fa fa-chevron-left"></i> Continue Shopping

                                </a>

                            </div> <!-- pull-left Ends -->

                            <div class="pull-right"> <!-- pull-right Starts -->

                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">

                                    <i class="fa fa-refresh"></i> Update Cart

                                </button>

                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to checkout <i class="fa fa-chevron-right"></i>
                                </a>

                            </div> <!-- pull-right Ends-->

                        </div> <!-- box-footer Ends -->

                    </form> <!-- form Ends -->

                </div> <!-- box ends -->

                <div id="row same-height-row"> <!-- row same-height-row Starts -->

                    <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 Starts -->

                        <div class="box same-height headline"> <!-- box same-height headline Starts -->

                            <h3 class="text-center">You also like these Products </h3>

                        </div> <!-- box same-height headline Ends -->

                    </div> <!-- col-md-3 col-sm-6 Ends -->

                    <div class="center-responsive col-md-3 col-sm-6"> <!-- center-responsive col-md-3 col-sm-6 Starts -->

                        <div class="product same-height"> <!-- product same-height Starts -->

                            <a href="details.php">
                                <img src="admin_panel/product_images/product.jpg" class="img-responsive">
                            </a>

                            <div class="text"> <!-- text Starts -->

                                <h3> <a href="details.php">Keep Calm and Shine On</a> </h3>

                                <p class="price">$55</p>

                            </div> <!--text Ends -->

                        </div> <!-- product same-height Ends -->

                    </div> <!-- center-responsive col-md-3 col-sm-6 Ends -->

                    <div class="center-responsive col-md-3 col-sm-6"> <!-- center-responsive col-md-3 col-sm-6 Starts -->

                        <div class="product same-height"> <!-- product same-height Starts -->

                            <a href="details.php">
                                <img src="admin_panel/product_images/product.jpg" class="img-responsive">
                            </a>

                            <div class="text"> <!-- text Starts -->

                                <h3> <a href="details.php">Keep Calm and Shine On</a> </h3>

                                <p class="price">$55</p>

                            </div> <!--text Ends -->

                        </div> <!-- product same-height Ends -->

                    </div> <!-- center-responsive col-md-3 col-sm-6 Ends -->

                    <div class="center-responsive col-md-3 col-sm-6"> <!-- center-responsive col-md-3 col-sm-6 Starts -->

                        <div class="product same-height"> <!-- product same-height Starts -->

                            <a href="details.php">
                                <img src="admin_panel/product_images/product.jpg" class="img-responsive">
                            </a>

                            <div class="text"> <!-- text Starts -->

                                <h3> <a href="details.php">Keep Calm and Shine On</a> </h3>

                                <p class="price">$55</p>

                            </div> <!--text Ends -->

                        </div> <!-- product same-height Ends -->

                    </div> <!-- center-responsive col-md-3 col-sm-6 Ends -->

                </div> <!-- row same-height-row Ends-->

            </div> <!-- col-md-9 Ends -->

            <div class="col-md-3">  <!-- col-md-3 Starts (Sidebar) -->

                <div class="box" id="order-summary"> <!-- box Starts -->

                    <div class="box-header"> <!-- box-header Starts -->

                        <h3>Order Summary</h3>

                    </div> <!-- box-header Ends -->

                    <p class="text-muted">
                        Shipping and additional cost are calculated based on the values you have entered.
                    </p>

                    <div class="table-responsive"> <!-- table-responsive Starts -->

                        <table class="table"> <!-- table Starts -->

                            <tbody> <!-- tbody Starts -->

                                <tr>
                                    <td> Order Subtotal </td>

                                    <th> $200.00</th>
                                </tr>

                                <tr>

                                    <td>Shipping and handling</td>
                                    <td> $0.00</td>

                                </tr>

                                <tr>

                                    <td>Tax</td>

                                    <th>$0.00</th>

                                </tr>

                                <tr class="total">

                                    <td>Total</td>

                                    <th>$200.00</th>

                                </tr>

                            </tbody> <!-- tbody Ends -->

                        </table> <!-- table Ends -->

                    </div> <!-- table-responsive Ends -->

                </div> <!-- box Ends -->

            </div> <!-- col-md-3 Ends (SideBard) -->

        </div> <!-- container Ends -->

    </div> <!-- content Ends -->

        <!-- Footer Starts -->
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
