<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

    <!-- Check if Wordpress is running on localhost. If so, load the uglyfied css -->
    <?php if (substr($_SERVER['REMOTE_ADDR'], 0, 4) == '127.' || $_SERVER['REMOTE_ADDR'] == '::1'): ?>
      <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" >
    <?php else: ?>
      <link href="<?php echo get_template_directory_uri(); ?>/style.min.css" rel="stylesheet" type="text/css" >
    <?php endif ?>

		<!-- Meta tags -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">




		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/logo.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Typekit -->
		<script src="//use.typekit.net/oqa5pak.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="header-bg clearfix">
		<div class="header-content">
			<ul class="branding">
				<li class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-inner.svg"></a>
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
