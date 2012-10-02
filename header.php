<?php
/**
 * Main template
 *
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi">
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'rogainingperm' ), max( $paged, $page ) );

	?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less"-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--script src="<?php echo get_template_directory_uri(); ?>/js/less.js" type="text/javascript"></script-->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>
<body class="home blog">
	<div class="menu-navigation navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse above-header-nav-collapse">
					<?php
					/** Loading WordPress Custom Menu with Fallback to wp_list_pages **/
					wp_nav_menu( array( 'menu' => 'main-menu', 'container_class' => 'menu-header-container', 'menu_class' => 'nav nav-menu menu', 'menu_id' => 'menu-short-menu' ) );
					?>
				</div>
				<div id="social-networking" class="clearfix">
					<ul class="nav social-icons clearfix">
						<li>
							<a href="http://twitter.com/standardtheme" class="fademe" target="_blank"><img src="http://standardtheme.com/demo/wp-content/themes/standard/images/social/small/twitter.png" alt=""></a>
						</li>
					</ul>
				</div>
				<!--a class="brand" href="#">Рогейн в Перми</a-->
				<!--div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="http://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D0%B3%D0%B5%D0%B9%D0%BD" target="_blank">О Рогейне</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div--><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<div id="header" class="imageless">
		<div id="head-wrapper" class="container clearfix">
			<div id="hgroup" class="clearfix no-logo">
				<div id="logo">
					<h1 id="site-title">
						<a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1><!-- /#site-title -->
					<p><small id="site-description">It's what Willis was talkin' 'bout</small></p>		
				</div><!-- /#logo -->
				<!--div id="header-widget">
					<div id="standard-ad-468x60-3" class="header-widget widget standard-ad-billboard">
						<a href="http://standardtheme.com" target="_blank"><img src="http://standardtheme.com/demo/wp-content/themes/standard/lib/standard-ad-billboard/images/standard-468.jpg" alt="Standard"></a>
					</div>
				</div--><!-- /#header-widget -->							
			</div><!-- /#hgroup -->
		</div><!-- /#head-wrapper -->
	</div>
	<div id="wrapper">
		<div class="container">
			<div class="row">