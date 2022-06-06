<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ndv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/strok_gap_icon.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/responsive.css"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="<?php bloginfo('template_directory') ?>/images/favicon.png">
        <!-- Favicon Icon -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

        <section class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                        <div class="topMenusHolder">
                            <ul class="topMenus clearfix poppins">
                                <li><a href="#"><i class="frontIcon icon-Exit"></i>Register</a></li>
                                <li><a href="#"  data-toggle="collapse" data-target="#accountTogg">My Account <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu collapse" id="accountTogg">
                                        <li><a href="#">My wishlis</a></li>
                                        <li><a href="#">My cart</a></li>
                                        <li><a href="#">sing in</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="frontIcon icon-ShoppingCart"></i>5 Items</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-2">
                        <div class="logo text-center">
                            <a href="index.html"><img src="images/logo.png" alt="Volta"/></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-5">
                        <div class="topLanguangeSearch clearfix">
                            <form method="post">
                                <input type="text" name="s" id="s" placeholder="Search"/>
                            </form>
                            <div class="langMenu">
                                <a href="#" data-toggle="collapse" data-target="#langTogg">EN <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu collapse" id="langTogg">
                                    <li><a href="#">BANGLA</a></li>
                                    <li><a href="#">CHINA</a></li>
                                    <li><a href="#">ENGlISH</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <header class="header" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="mainMenu poppins">
                            <div class="logofixedHeader text-center">
                                <a href="index.html"><img alt="Volta" src="images/logo.png"></a>
                            </div>
                            <div class="mobileMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="has-menu-items"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">HOMEPAGES</li>
                                        <li><a href="index.html">HOMEPAGE 1</a></li>
                                        <li><a href="index2.html">HOMEPAGE 2</a></li>
                                        <li><a href="index3.html">HOMEPAGE 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-menu-items"><a href="#">shop</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">SHOPPAGES</li>
                                        <li><a href="shop_01.html">shop style one</a></li>
                                        <li><a href="shop_02.html">shop style two</a></li>
                                        <li><a href="shop_03.html">shop style three</a></li>
                                        <li><a href="shop_04.html">shop style four</a></li>
                                        <li><a href="shop_single.html">Shop Single Page</a></li>
                                        <li><a href="checkout.html">checkout Page</a></li>
                                        <li><a href="cart.html">Cart page</a></li>
                                    </ul>
                                </li>
                                <li class="has-menu-items"><a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">PAGES</li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="contact_us.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li class="has-menu-items"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">BLOGPAGES</li>
                                        <li><a href="blog_01.html">Blog style one</a></li>
                                        <li><a href="blog_02.html">Blog style two</a></li>
                                        <li><a href="single_blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact_us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>