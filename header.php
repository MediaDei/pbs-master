<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type="text/css">

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">

	<title>Prayer Book Society</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">

		<header>
			<div class="title-wrap">
			  <h1 class="main-title"><a href="/">Prayer
            			Book
						Society
				</a></h1>

				<div class="main-social">
				  <a class="fa fa-facebook" href="#"></a>
				  <a class="fa fa-twitter" href="#"></a>
				  <a class="fa fa-rss" href="/rss/"></a>
				  <a class="fa fa-envelope contact" href="#" onclick="return false;"></a>
				</div>
			</div>

			<nav class="main-nav"><div class="container">
			  <a class="home" href="#">Home</a>
			  <a class="about" href="#">About</a>
			  <a class="projects" href="#">Projects</a>
			  <a class="resources" href="#" title="Coming Soon">Resources</a>
			  <a class="join" href="#" title="Coming Soon">Join</a>
			</div></nav>
