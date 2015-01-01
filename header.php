<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<!-- Meta tags -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" >
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/logo.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css' >	

    
    <?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="header-bg clearfix">			
		<div class="header-content">
			<ul class="branding">
				<li class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/logo.svg"></a>
				</li>
				<li class="title">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</li>
			</ul>
	
			<ul class="nav">
				 <?php wp_list_pages('title_li='); ?>
			</ul>
		
		</div>
	</header>

	<div class="wrapper">
