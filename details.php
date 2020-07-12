<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="checkout.php">4 items in your Card | Total Price: $300 </a>
        </div>
        <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href="customer_register.php">Register</a>
                </li>
                <li>
                    <a href="checkout.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Go To Cart</a>
                </li>
                <li>
                    <a href="checkout.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="navbar" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">toggle navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">toggle search</span>
                <i class="fa fa-search"></i>
            </button>

        </div>

        <div class="navbar-collapse collapse" id="navigation">
            <div class="padding-nav">
                <ul class="nav navbar-nav left">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Accunt</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>

            <a href=cart.php" class="btn navbar-btn btn-primary right">
                <i class="fa fa-shopping-cart"></i>
                <span>4 Items In Your Cart</span>
            </a>
            <div class="navbar-collapse collapse right">
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="collapse clearfix" id="search">
                <form method="get" action="results.php" class="navbar-form">
                    <div class="input-group">
                        <input type="text" class="from-control" name="user_query" placeholder="Search" required>

                        <span class="input-group-btn">
                         <button type="submit" name="search" value="Search" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                         </span>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <?
            include("includes/sidebar.php")
            ?>
        </div>

        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div id="myCarousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-top="0" data-target="#myCarusel"></li>
                                <li data-slide-top="1" data-target="#myCarusel"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img src="admin_area/product_images/books10-1a.JPG" alt="Product 1-a"></center>
                                </div>
                                <div class="item">
                                    <center><img src="admin_area/product_images/books10-1b.JPG" alt="Product 1-b"></center>
                                </div>
                            </div>
                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Right</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<?
include("includes/footer.php")
?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>
