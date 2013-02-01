<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<!--[if lt IE 9]>    
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">

	<!-- Mobile Screen Resizing -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Icons -->
	<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-114.png">

	<!-- Feeds & Pings -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/GoMakeThings">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php wp_head(); ?>

</head>

<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = $page ? $page : 'default'
?>

<body id="<?php echo $page ?>">

	<!-- Old Browser Warning -->
	<!--[if lte IE 6]>
		<div class="container">
			<p>Did you know that your web browser (<em>the program you're using to access the internet</em>) is a bit old? Some of the content on this site might look a bit funny as a result. Upgrading to a new browser will provide you with a faster, better, and safer web experience.</p>
			<p>Ready to upgrade? Take a look at <a href="https://www.google.com/chrome" target="_blank">Google Chrome</a> (<em>my personal favorite</em>), <a href="http://www.mozilla.org/firefox/" target="_blank">Firefox</a>, or <a href="http://www.apple.com/safari/" target="_blank">Safari</a>.</p>
			<div class="dotted"></div>
		</div>
	<![endif]-->

	<header>
		<div class="container text-center logo-wrap">
			<a class="logo" href="<?php echo get_option('home'); ?>/"><i class="icon anchor"></i> Go Make Things</a>
			<p class="description">By Chris Ferdinandi, a pirate-obsessed designer in Boston, MA.</p>
		</div>

		<a class="screen-reader" href="#skipnav">Skip over navigation</a>

		<nav class="container text-center">
			<ul class="nav hide-desktop">
				<li><a data-toggle="collapse" href=".mobile-nav">Menu</a></li>
			</ul>
			<div class="nav-collapse mobile-nav">
				<ul class="nav">
					<li class="home"><a href="<?php echo get_option('home'); ?>/">Writing</a></li>
					<li class="about"><a href="<?php echo get_option('home'); ?>/about/">About</a></li>
					<li class="resources"><a href="<?php echo get_option('home'); ?>/resources/">The List</a></li>
					<li><a class="hide-mobile" data-toggle="collapse" href="#subscribe">Subscribe</a></li>
					<li><a class="hide-mobile" data-toggle="collapse" href="#search-box">Search</a></li>
				</ul>
			</div>

			<div class="collapse mobile-nav" id="subscribe">
				<h4 class="muted hide-desktop">Subscribe</h4>
				<ul class="nav nav-sub">
					<li><a href="http://feeds.feedburner.com/GoMakeThings"><i class="icon rss"></i> RSS</a></li>
					<li><a href="http://feedburner.google.com/fb/a/mailverify?uri=GoMakeThings&amp;loc=en_US"><i class="icon email"></i> Email</a></li>
					<li><a href="http://twitter.com/chrisferdinandi"><i class="icon twitter"></i> Twitter</a></li>
				</ul>
			</div>

			<div class="collapse mobile-nav" id="search-box">
				<div class="padding-top"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
			</div>

		</nav>
	</header>

	<section class="container" id="skipnav">