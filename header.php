<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />


	<!-- MOBILE SCREEN RESIZING -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- END MOBILE SCREEN RESIZING -->

	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->


	<!-- ICONS -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
	<!-- END ICONS -->

	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/tablet.css" media="only screen and (min-width: 641px) and (max-width: 960px)" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/iphone.css" media="only screen and (max-width: 640px)" />
	<!-- END STYLESHEETS -->


	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/GoMakeThings" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>


<!-- START GOOGLE ANALYTICS -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5423447-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- END GOOGLE ANALYTICS -->


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