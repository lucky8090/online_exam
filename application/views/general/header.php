<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="description" content="">
	<meta name="author" content="ScriptsBundle">
	<title>:: TPS Empire ::</title>
	<link rel="icon" href="<?= base_url()?>assets/images/favicon.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/et-line-fonts.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/owl.style.css">
	
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic%7CMerriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/flaticon.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/js/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link rel="stylesheet" id="color" href="<?= base_url()?>assets/css/colors/defualt.css">
	<link href="<?= base_url()?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/css/select2.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assets/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
	<script src="<?= base_url()?>assets/js/modernizr.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.min.js"></script> 
	<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
	<style>
		.currentLink {
			background-color: #3498db;
			color: white;
		}
	</style>
</head>

<body>
	<div class="preloader"><span class="preloader-gif"></span>
	</div>
	<div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-gear fa-spin"></i></a>
		<h5>STYLE SWITCHER</h5>
		<div class="theme-colours">
			<p>Choose Colour style</p>
			<ul>
				<li>
					<a href="#." class="defualt" id="defualt"></a>
				</li>
				<li>
					<a href="#." class="red" id="red"></a>
				</li>
				<li>
					<a href="#." class="green" id="green"></a>
				</li>
				<li>
					<a href="#." class="orange" id="orange"></a>
				</li>
				<li>
					<a href="#." class="purple" id="purple"></a>
				</li>
				<li>
					<a href="#." class="yellow" id="yellow"></a>
				</li>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
	<!-- <div id="header-info-bar">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<ul class="header-social pull-left">
					<li><a href="#" class="social-skype"><i class="fa fa-skype"></i></a>
					</li>
					<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#" class="social-youtube"><i class="fa fa-youtube"></i></a>
					</li>
					<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a>
					</li>
					<li><a href="#" class="social-linkedin"><i class="fa fa-linkedin"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12"> <a href="#" class="info-bar-meta-link"><i class="fa fa-caret-right fa-fw"></i>Careers</a>  <a href="#" class="info-bar-meta-link"><i class="fa fa-caret-right fa-fw"></i>Recent Events</a>  <a href="#" class="info-bar-meta-link"><i class="fa fa-caret-right fa-fw"></i>Latest News</a>  <a href="#" class="info-bar-meta-link hidden-sm"><i class="fa fa-caret-right fa-fw"></i>Blog</a> 
			</div>
		</div>
	</div> -->
	<header class="header-area">
		<div class="logo-bar">
			<div class="container clearfix">
				<!-- Logo -->
				<div class="logo">
					<a href="index.html">
						<img src="<?= base_url()?>assets/images/logo.png" alt="">
					</a>
				</div>
				<!--Info Outer-->
				<div class="information-content">
					<!--Info Box-->
					<div class="info-box  hidden-sm">
						<div class="icon"><span class="icon-envelope"></span>
						</div>
						<div class="text">EMAIL</div> <a href="mailt:info@tpsempire.com">info@tpsempire.com</a> 
					</div>
					<!--Info Box-->
					<div class="info-box">
						<div class="icon"><span class="icon-phone"></span>
						</div>
						<div class="text">Call Now</div> <a class="location" href="#">+91-7054661155</a> 
					</div>
					<div class="info-box">
						<div class="icon"><span class="icon-map-pin"></span>
						</div>
						<div class="text">Find Us</div> <a class="location" href="#">Model Town, Bangalore </a> 
					</div>
				</div>
			</div>
		</div>
		<div class="navigation-2">
			<nav class="navbar navbar-default ">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>  <span class="icon-bar"></span> 
						</button>
					</div>
					<div class="collapse navbar-collapse" id="main-navigation">
						<ul class="nav navbar-nav">
							<li><a href="<?= site_url('home/index')?>" class="<?php if ( $this->uri->uri_string() == 'home/index' ){ echo 'currentLink';} else { echo '';} ?>">Home </a> 
							</li>
							<li><a href="<?= site_url('home/about')?>" class="<?php if ( $this->uri->uri_string() == 'home/about' ){ echo 'currentLink';} else { echo '';} ?>">About</a> 
							</li>
							<li class="dropdown"> <a class="dropdown-toggle <?php if ( $this->uri->uri_string() == 'home/ByTechnology' || $this->uri->uri_string() == 'home/BySpecializations' ){ echo 'currentLink';} else { echo '';} ?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Training <span class="fa fa-angle-down" ></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?= site_url('home/ByTechnology')?>">By Technology </a>
									</li>
									<li><a href="<?= site_url('home/BySpecializations')?>">By Specializations </a> 
									</li>
								</ul>
							</li>
							<li class="dropdown"> <a class="dropdown-toggle <?php if ( $this->uri->uri_string() == 'home/SkillDevelopment' || $this->uri->uri_string() == 'home/DigitalMarketing' || $this->uri->uri_string() == 'home/BusinessAnalytics' || $this->uri->uri_string() == 'home/SoftwareConsulting' || $this->uri->uri_string() == 'home/GovernmentProject' || $this->uri->uri_string() == 'home/Education' || $this->uri->uri_string() == 'home/ResourceProcessOutsourcing' ){ echo 'currentLink';} else { echo '';} ?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Services <span class="fa fa-angle-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?= site_url('home/SkillDevelopment')?>">Skill Development </a> 
									</li>
									<li><a href="<?= site_url('home/DigitalMarketing')?>">Digital Marketing </a> 
									</li>
									<li><a href="<?= site_url('home/BusinessAnalytics')?>">Business Analytics Solutions</a> 
									</li>
									<li><a href="<?= site_url('home/SoftwareConsulting')?>">Software Consulting</a> 
									</li>
									<li><a href="<?= site_url('home/GovernmentProject')?>">Government Project</a>
									</li>
									<li><a href="<?= site_url('home/Education')?>">Education</a>
									</li>
									<li><a href="<?= site_url('home/ResourceProcessOutsourcing')?>">Resource Process Outsourcing</a>
									</li>
								</ul>
							</li>
							<li class="dropdown"> <a class="dropdown-toggle <?php if ( $this->uri->uri_string() == 'home/gallery'  ){ echo 'currentLink';} else { echo '';} ?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Events <span class="fa fa-angle-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?= site_url('home/gallery')?>">Current Events </a> </li>
								</ul>
							</li>
							<li><a href="<?= site_url('home/contact')?>" class="<?php if ( $this->uri->uri_string() == 'home/contact' ){ echo 'currentLink';} else { echo '';} ?>">Contact Us</a>
							</li>
							<li>
								<a href="<?= site_url('home/registration')?>" class="<?php if ( $this->uri->uri_string() == 'home/registration' ){ echo 'currentLink';} else { echo '';} ?>">Registration</a> 
							</li>
							<li>
								<a href="https://www.payumoney.com/webfronts/#/index/IBMCEP" target="_blank">Online Payment</a> 
							</li>
							<li>
								<a href="<?= site_url('home/apply_for_certificate')?>" class="<?php if ( $this->uri->uri_string() == 'home/apply_for_certificate' ){ echo 'currentLink';} else { echo '';} ?>">Apply for certificate</a> 
							</li>
							<li>
								<a href="<?= site_url('home/login')?>" class="<?php if ( $this->uri->uri_string() == 'home/login' ){ echo 'currentLink';} else { echo '';} ?>">Login</a> 
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	