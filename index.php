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
	<title></title>
	<!--link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /-->
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/less/bootstrap.less">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/less.js" type="text/javascript"></script>
	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Project name</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">

	<h1>Bootstrap starter template</h1>
	<p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

	</div> <!-- /container -->
</body>
</html>