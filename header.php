<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" >

		<!-- Meta tags -->
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="keywords" content="Personal, Blog, Design">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/logo.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Typekit -->
    <script src="https://use.typekit.net/syf8mfx.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="site-header">
    <a href="<?php echo home_url(); ?>">
      <h1 class="brand">
        <span class="site-name"><?php bloginfo('name'); ?></span>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-inner.svg">
      </h1>
    </a>
	</header>

	<div class="wrapper">
