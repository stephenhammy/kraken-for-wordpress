<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<!-- Mobile Screen Resizing -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Icons -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

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

	<div id="top-bar-bg">
		<div id="top-bar">

			<div id="top-bar-1"><h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1></div>
			
			<div id="top-bar-2">	
			<ul id="main-nav">
				<li class="home"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<li class="about"><a href="<?php echo get_option('home'); ?>/about/">About</a></li>
				<li class="contact"><a href="<?php echo get_option('home'); ?>/contact/">Contact</a></li>
			</ul>
			<div class="clear"></div>
			</div>

		</div>
		<div class="clear"></div>
	</div>


	<div id="page-wrap">