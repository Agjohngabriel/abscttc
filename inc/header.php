<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <!-- META ============================================= -->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="keywords" content="" />
	    <meta name="author" content="" />
	    <meta name="robots" content="" />
	    <!-- DESCRIPTION -->
	    <meta name="description" content="ASCTTC : Teachers Training Center" />	
	    <!-- OG -->
	    <meta property="og:title" content="ASCTTC : Teachers Training Center" />
	    <meta property="og:description" content="ASCTTC : Teachers Training Center" />
	    <meta property="og:image" content="" />
	    <meta name="format-detection" content="telephone=no">
	    <!-- FAVICONS ICON ============================================= -->
	    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon" />
	    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/fff.png" />
	    <!-- PAGE TITLE HERE ============================================= -->
        <title><?php 
            if(isset($title) && !empty($title)){
                echo $title;
            }else{
                echo "ASCTTC : Teachers Training Center";
            }
        ?></title>
	    <!-- MOBILE SPECIFIC ============================================= -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!--[if lt IE 9]>
	    <script src="./assets/js/html5shiv.min.js"></script>
	    <script src="./assets/js/respond.min.js"></script>
	    <![endif]-->
	    <!-- All PLUGINS CSS ============================================= -->
	    <link rel="stylesheet" type="text/css" href="./assets/css/assets.css">
	    <!-- TYPOGRAPHY ============================================= -->
	    <link rel="stylesheet" type="text/css" href="./assets/css/typography.css">	
	    <!-- SHORTCODES ============================================= -->
	    <link rel="stylesheet" type="text/css" href="./assets/css/shortcodes/shortcodes.css">
	    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome-animation.min.css">
	    <link rel="stylesheet" type="text/css" href="./assets/css/animate.css">
	    <!-- STYLESHEETS ============================================= -->
	    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	    <link class="skin" rel="stylesheet" type="text/css" href="./assets/css/color/color-1.css">	
	    <!-- REVOLUTION SLIDER CSS ============================================= -->
	    <link rel="stylesheet" type="text/css" href="./assets/vendors/revolution/css/layers.css">
	    <link rel="stylesheet" type="text/css" href="./assets/vendors/revolution/css/settings.css">
	    <link rel="stylesheet" type="text/css" href="./assets/vendors/revolution/css/navigation.css">
	    <!-- REVOLUTION SLIDER END -->	
    </head>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-icon-bx"></div>
	        <!-- Header Top ==== -->
                <header class="header rs-nav header-transparent">
		            <div class="top-bar">
			            <div class="container">
				            <div class="row d-flex justify-content-between">
					            <div class="topbar-left">
						            <ul>
							            <li><a href="faq"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							            <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
					    	        </ul>
					            </div>
					            <div class="topbar-right">
						            <ul>
							        <!-- <li>
								        <select class="header-lang-bx">
									        <option data-icon="flag flag-uk">English UK</option>
									        <option data-icon="flag flag-us">English US</option>
								        </select>
							        </li> -->
							            <li><a href="login">Login</a></li>
							            <li><a href="register">Register</a></li>
						            </ul>
					            </div>
				            </div>
			            </div>
		            </div>
		            <div class="sticky-header navbar-expand-lg">
                        <div class="menu-bar clearfix">
                            <div class="container clearfix">
					        <!-- Header Logo ==== -->
					            <div class="menu-logo">
						            <a href="index"><img src="./assets/images/fff.png" alt="ASCTTC"></a>
					            </div>
					        <!-- Mobile Nav Button ==== -->
                                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						            <span></span>
						            <span></span>
						            <span></span>
					            </button>
					        <!-- Author Nav ==== -->
                                <div class="secondary-menu">
                                    <div class="secondary-inner">
                                        <ul>
								            <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                            <!-- Search Button ==== -->
                                            <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                                        </ul>
						            </div>
                                </div>
					            <!-- Search Box ==== -->
                                <div class="nav-search-bar">
                                    <form action="#">
                                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                        <span><i class="ti-search"></i></span>
                                    </form>
						            <span id="search-remove"><i class="ti-close"></i></span>
                                </div>
					            <!-- Navigation Menu ==== -->
                                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
					                <div class="menu-logo">
							            <a href="index"><img src="./assets/images/fff.png" alt=""></a>
						            </div>
                                    <ul class="nav navbar-nav">	
                                    <li class="active"><a href="index">Home</a></li>
                                    <li><a href="javascript:;">About<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
									        <li><a href="about">About us</a></li>
									        <li><a href="about-1">About ASCTTC</a></li>
								        </ul>
							        </li>
                                    <li><a href="contact">Contact Us</a></li>
                                    <li><a href="event">Events</a></li>
                                    <li><a href="faq">FAQs</a></li>
                                    <!--<li><a href="membership">Membership</a></li>-->
                                    <li class="add-mega-menu"><a href="javascript:;">Our Courses <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu add-menu">
									        <li class="add-menu-left">
										        <h5 class="menu-adv-title">Our Courses</h5>
										        <ul>
									                <li><a href="courses">Courses </a></li>
											        <li><a href="event">Upcoming Event</a></li>
										        </ul>
									        </li>
									        <li class="add-menu-right">
										        <img src="./assets/images/adv/adv.jpg" alt=""/>
									        </li>
								        </ul>
							        </li>
						        </ul>
						        <div class="nav-social-link">
							        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
							        <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						        </div>
                            </div>
					        <!-- Navigation Menu END ==== -->
                        </div>
                    </div>
                </div>
            </header>