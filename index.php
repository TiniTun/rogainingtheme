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
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less">
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
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Рогейн в Перми</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="#about">О Рогейне</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li class="nav-header">Соревнования</li>
						<li><a href="#"><i class="icon-calendar"></i>Календарь</a></li>
						<li><a href="#"><i class="icon-file"></i>Положение</a></li>
						<li><a href="#"><i class="icon-signal"></i>Ранг рогейнеров</a></li>
					<ul>
				</div>
			</div>
			<div class="span8">
				<div class="hero-unit">
					<h1>Рогейн</h1>
					<p>Рогейн (англ. Rogaining) — самостоятельный вид спорта, достаточно близкий к спортивному ориентированию, приключенческим гонкам, горным марафонам и некоторым другим видам спорта. Формально его можно считать командным суточным ориентированием по выбору, хотя в действительности он значительно отличается от классического спортивного ориентирования.</p>
				</div>
				<ul class="thumbnails">
				<li class="span3">
					<div class="thumbnail">
						<img src="http://rogaining.ru/images/stories/news/rrc2012_logo.png" alt="">
						<h5>9-й Чемпионат России по рогейну 2012</h5>
						<p>Продолжается заявка на 9-й Чемпионат России по рогейну, который состоится 21 - 22 июля 2012 года в Ленинградской области. Приём заявок продлится до 10 июля 2012 г. Для оплаты стартового взноса в льготном размере нужно заявиться и оплатить взнос до 30 июня 2012 года. </p>
						<p><a href="#" class="btn btn-primary">Подробнее</a></p>
					</div>
				</li>
				<li class="span3">
					<div class="thumbnail">
						<img src="http://rogaining.ru/images/stories/news/rrc2012_logo.png" alt="">
						<h5>9-й Чемпионат России по рогейну 2012</h5>
						<p>Продолжается заявка на 9-й Чемпионат России по рогейну, который состоится 21 - 22 июля 2012 года в Ленинградской области. Приём заявок продлится до 10 июля 2012 г. Для оплаты стартового взноса в льготном размере нужно заявиться и оплатить взнос до 30 июня 2012 года. </p>
						<p><a href="#" class="btn btn-primary">Подробнее</a></p>
					</div>
				</li>
				<li class="span3">
					<div class="thumbnail">
						<img src="http://rogaining.ru/images/stories/news/rrc2012_logo.png" alt="">
						<h5>9-й Чемпионат России по рогейну 2012</h5>
						<p>Продолжается заявка на 9-й Чемпионат России по рогейну, который состоится 21 - 22 июля 2012 года в Ленинградской области. Приём заявок продлится до 10 июля 2012 г. Для оплаты стартового взноса в льготном размере нужно заявиться и оплатить взнос до 30 июня 2012 года. </p>
						<p><a href="#" class="btn btn-primary">Подробнее</a></p>
					</div>
				</li>
				<li class="span3">
					<div class="thumbnail">
						<img src="http://rogaining.ru/images/stories/news/rrc2012_logo.png" alt="">
						<h5>9-й Чемпионат России по рогейну 2012</h5>
						<p>Продолжается заявка на 9-й Чемпионат России по рогейну, который состоится 21 - 22 июля 2012 года в Ленинградской области. Приём заявок продлится до 10 июля 2012 г. Для оплаты стартового взноса в льготном размере нужно заявиться и оплатить взнос до 30 июня 2012 года. </p>
						<p><a href="#" class="btn btn-primary">Подробнее</a></p>
					</div>
				</li>
				</ul>
			</div>
			<div class="span2">
				<div class="well sidebar-nav">
					<a href="#" class="btn btn-primary">Twitter</a>
				</div>
				<div class="well sidebar-nav">
					Сообщество
				</div>
			</div>
		</div>
	</div> <!-- /container -->
</body>
</html>