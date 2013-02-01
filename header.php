<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Info -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
        <?php if (is_home ()) : // if homepage ?>
            <?php bloginfo('name'); ?>
            
        <?php elseif (is_category()) : // if category page ?>
            <?php single_cat_title(); ?> | <?php bloginfo('name'); ?>
        
        <?php elseif (is_single()) : // if an individual post ?>
            <?php single_post_title(); ?> | <?php bloginfo('name'); ?>

        <?php elseif (is_404()) : // if 404 page?>
            Oh snap! Page not found.

        <?php elseif (is_page()) : // if a page ?>
            <?php single_post_title(); ?> | <?php bloginfo('name'); ?>

        <?php else : // everything else ?>
            <?php wp_title(‘’,true); ?> | <?php bloginfo('name'); ?>

        <?php endif; ?>
    </title>
	<?php if (is_home ()) : // if homepage ?>
	    <meta name="description" content="By Chris Ferdinandi, a web design and frontend developer in Boston, MA">
    <?php endif; ?>
	<link rel="canonical" href="<?php the_permalink() ?>">


	<!--[if lt IE 9]>    
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">

	<!-- Mobile Screen Resizing -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Icons -->
	<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-144.png">

	<!-- Feeds & Pings -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/GoMakeThings">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php wp_head(); ?>

</head>

<!-- Creates Page ID. -->
<?php
	if (is_single()) {
	    $prefix = 'page';
	}
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = $page ? $page : 'default'
?>

<body id="top" class="no-js">

	<!-- Old Browser Warning -->
	<!--[if lte IE 7]>
		<div class="container">
			<p>Did you know that your web browser (<em>the program you're using to access the internet</em>) is a bit old? Some of the content on this site might look a bit funny as a result. <a href="http://browsehappy.com/">Upgrade your browser</a> for a faster, better, and safer web experience.</p>
			<hr>
		</div>
	<![endif]-->

	<header class="container text-center" id="<?php echo $prefix ?><?php echo $page ?>">
		<h1 class="no-space-top small-space-bottom"><a class="logo" href="<?php echo get_option('home'); ?>/"><i class="icon-anchor"></i> Go Make Things</a></h1>
		<p class="muted">By Chris Ferdinandi, a pirate-obsessed designer in Boston, MA.</p>

		<a class="screen-reader" href="#skipnav">Skip over navigation</a>

		<nav>
			<ul class="nav muted responsive-nav">
				<li><button data-toggle="collapse" href=".nav-mobile">Menu</button></li>
			</ul>
			<div class="nav-mobile">
				<ul class="nav muted">
					<li><a id="nav-home" href="<?php echo get_option('home'); ?>/">Writing</a></li>
					<li><a id="nav-about" href="<?php echo get_option('home'); ?>/about/">About</a></li>
					<li><a id="nav-search" href="<?php echo get_option('home'); ?>/search/">Search</a></li>
					<li><a href="http://feeds.feedburner.com/GoMakeThings">RSS Feed</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<section class="container no-space-top" id="skipnav">
