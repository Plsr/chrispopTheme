<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<!-- Meta tags -->
		<meta name="description" content="Alles kann, nichts muss">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scale=0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta property="og:site_name" content="ccchris.de"/>
		<meta property="og:description" content="Alles kann, nichts muss">
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<meta property="og:type" content="blog"/>
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:image" content="http://chrispop.de/ccchris/wp-content/themes/ccchris/logo.png"/>

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" >
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/logo.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>

    

		

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header_bg clear" role="banner">
				
				<!-- header_cintent -->
				<div class="header_content">

					<ul class="list_reset logo_name">
						<!-- logo -->
						<li class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/logo.png"></a>
						</li>
						<!-- /logo -->
	
						<!-- title -->
						<li class="title">
							<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
						</li>
						<!-- /title -->
	
					</ul>
					<!-- /logo_name -->


					<!-- nav -->
					<ul class="nav list_reset" role="navigation">
						<?php html5blank_nav(); ?>
					</ul>
					<!-- /nav -->

				</div>
				<!-- /header_content --> 

			</header>
			<!-- /header -->
		<!-- wrapper -->	
		<div class="wrapper">
