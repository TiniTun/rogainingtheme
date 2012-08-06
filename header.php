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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less"-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--script src="<?php echo get_template_directory_uri(); ?>/js/less.js" type="text/javascript"></script-->
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Рогейн в Перми</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="http://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D0%B3%D0%B5%D0%B9%D0%BD" target="_blank">О Рогейне</a></li>
						<!--li><a href="#contact">Контакты</a></li-->
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid">