<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<!-- Meta Tags -->
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Theme Page Title -->
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!-- favicon -->
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--css link-->
<link href="<?php echo get_template_directory_uri(); ?>/css/menuzord.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/revolution-slider.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/reset-style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/themecolor.css" rel="stylesheet" id="colorswitcher">

<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">.fancybox-margin{margin-right:15px;}</style></head>

<?php wp_head(); ?>

<body class="push-body" data-gr-c-s-loaded="true">

<!--wrapper start-->
<div class="wrapper">
 	
    <!-- Preloader -->
    <div class="preloader" style="display: none;"></div>
    
    <!-- Start Main Header -->
    <header class="mega-header">
        <div class="header-top">
            <div class="container">
                <div class="row clearfix">                
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	                    <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" title="Medical"></a>
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-12 header-top-widget headerwidget-style2">
                        <div class="header-widget">
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        			<i class="flaticon-square"></i>
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="#">Opening Hours</a></h5>
                        			<p class="sub-title"><a href="#">24/7/365</a></p>
                        		</div>
                        	</div>
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        			<i class="flaticon-medical-1"></i>
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="#">Sign In / Sign Up</a></h5>
                        			<p class="sub-title"><a href="#">Free trial for first time</a></p>
                        		</div>
                        	</div>
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        			<i class="flaticon-telephone-symbol-button"></i>
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="#">Call Us Today</a></h5>
                        			<p class="sub-title"><a href="#">(0)123 456 7890</a></p>
                        		</div>
                        	</div>
                        </div>
                    </div>                    
                </div>
            </div>
            
        </div>
        
        <!--Header Main-->
        <div class="header-main header-fixedtop" style="z-index: 1000; margin-left: 0px;">
            <div class="container">
                <div class="row clearfix">
                    <!--Main Menu-->
                    <div class="mega-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav id="menuzord" class="menuzord menuzord-responsive">
                            <ul class="menuzord-menu menuzord-indented scrollable" style="max-height: 400px;">
                                <?php 
                                $menus = wp_get_nav_menu_items( "Header Menu" );
                                foreach($menus as $item){
                                    //echo "<pre>"; var_dump($item); echo "</pre>"; die;
                                ?>
                                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                                <?php }//end foreach ?>
                            </ul>
						</nav>
                    </div>
                    <!--Main Menu End-->
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->