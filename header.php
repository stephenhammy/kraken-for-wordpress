<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link href="//get.pictos.cc/fonts/1413/1" rel="stylesheet" type="text/css">

	<!-- Mobile Screen Resizing -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5" />

	<!-- Icons -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon-114.png">

	<!-- Feeds & Pings -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/GoMakeThings" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>

</head>

<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = $page ? $page : 'default'
?>

<body id="<?php echo $page ?>">

	<div class="navbar">
		<div class="navbar-inner">

			<a class="logo" href="<?php echo get_option('home'); ?>/"><i class="icon anchor"></i> <?php bloginfo('name'); ?></a>

			<ul class="nav">
				<li class="home"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<li class="about"><a href="<?php echo get_option('home'); ?>/about/">About</a></li>
				<li class="contact"><a href="<?php echo get_option('home'); ?>/contact/">Contact</a></li>
			</ul>

		</div>
	</div>

	<div class="container">