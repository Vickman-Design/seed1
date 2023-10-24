<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <base href="<?= domain ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.png and root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $assets ?>/img/logo/favicon.ico">

    <!-- All css here -->

    <!-- bootstrap 4.0 css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/owl.carousel.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/animate.min.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/magnific-popup.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/meanmenu.min.css">
    <!-- Icon font css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= $assets ?>/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/responsive.css">
</head>


<body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start header -->
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 col-sm-8 col-xs-12">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i>helpseedinvest@gmail.com</a></li>
                            </ul>  
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="topbar-right">
                            <select class="select d-inline-block">
                                <option>Eng</option>
                                <option>Esp</option>
                                <option>Fra</option>
                                <option>Deu</option>
                            </select>
                            <ul>
                                <li><a href="./login"><img src="<?= $assets ?>/img/icon/login.png" alt="">Login</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- Start Header Menu -->
        <div id="sticker" class="header-menu-area header-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="./"><img src="<?= $assets ?>/img/logo/loggo.png" alt=""  width="80px" height="60px"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9">
                        <div class="header-right">
                            <a href="./registration" class="hd-btn">Signup</a>
                        </div>
                        <div class="header_menu f-right">
                            <nav id="mobile-menu">
                                <ul class="main-menu">
                                    <li><a href="./">Home</a></li>
                                    <li><a href="./about">About</a></li>

                                    <li><a href="./plan">Plan</a></li>

                                    <li><a href="./user-panel">Dashboard</a></li>
                                    <li class="contact"><a href="./contact">Contact</a>

                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Menu -->
    </header>
    <!-- End header area -->