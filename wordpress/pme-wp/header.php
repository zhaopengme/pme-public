<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
		<!-- Le styles -->
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/pme.js"></script>
	</head>
	<body>
		<div id="header" class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="/" title="<?php bloginfo('description');?>"><?php bloginfo('name');?></a>
					<div class="nav-collapse">
						<?php
						if(function_exists('wp_nav_menu')) {
						    wp_nav_menu(array('theme_location'=>'primary','menu_id'=>'nav','container'=>'ul','container_class'=>'nav','menu_class'=>'nav'));
						}
						?>
						<form id="searchform" class="navbar-search pull-left" method="get" action="<?php bloginfo('home'); ?>">
							<input type="text" class="search-query" placeholder="search" <?php the_search_query(); ?>" name="s" id="s" />
						</form>
						<?php
						if(function_exists('wp_nav_menu')) {
						    wp_nav_menu(array('theme_location'=>'submenu','menu_id'=>'submenu','container'=>'ul','menu_class'=>'nav pull-right'));
						}
						?>

					</div><!--nav-collapse / -->
				</div>
			</div>
		</div><!--#header / -->
		


