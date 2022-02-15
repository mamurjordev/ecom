<?php session_start();?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>M cart </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="frontend/assets/css/slicknav.css">
    <link rel="stylesheet" href="frontend/assets/css/animate.min.css">
    <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="frontend/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="frontend/assets/css/themify-icons.css">
    <link rel="stylesheet" href="frontend/assets/css/slick.css">
    <link rel="stylesheet" href="frontend/assets/css/nice-select.css">
    <link rel="stylesheet" href="frontend/assets/css/style.css">

    <!-- toaster notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>

<body>
    
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href=""><img src="frontend/assets/img/mcart.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="products.php">shop</a></li>
                                    <li><a href="categories.php">Categories</a></li>
                                       
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <?php if(isset($_SESSION['user_id'])): ?>
                                <li> <a href="account"><span class="flaticon-user"></span></a></li>
                                <?php else: ?>
                                <li> <a href="login.php"><span class="flaticon-user"></span></a></li>
                                <?php endif ?>
                                <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>