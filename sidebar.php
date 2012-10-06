<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
<div id="sidebar" class="span4">
	<?php
	/** Loading WordPress Custom Menu with Fallback to wp_list_pages **/
	wp_nav_menu( array( 'menu' => 'left',
						'theme_location'  => 'left',
						'container_class' => 'widget standard-social-influence',
						'container_id' => 'standard-influence-widget-2',
						'menu_class' => 'si-indvidual-list block-grid three-up', 
						'items_wrap' => '<div class="si-total"><div class="si-total-number">Золотая соточка</div></div><div class="thumbnail-img alignleft-img"><a class="thumbnail-link fademe" href="#"><img width="130" height="130" src="http://xn--b1abgbpdxffpei.xn--p1ai/wp-content/uploads/2012/09/zolsot.gif"></a></div><div class="si-individual title-wrap clearfix"><ul class="%2$s">%3$s</ul></div>'
					) );
	?>

	<?php
	/** Loading WordPress Custom Menu with Fallback to wp_list_pages **/
	wp_nav_menu( array( 'menu' => 'left2',
						'theme_location'  => 'left2', 
						'container_class' => 'widget standard-social-influence',
						'container_id' => 'standard-influence-widget-2',
						'menu_class' => 'si-indvidual-list block-grid three-up', 
						'items_wrap' => '<div class="si-total"><div class="si-total-number">Памяти Г.Н. Шестакова</div></div><div class="thumbnail-img alignleft-img"><a class="thumbnail-link fademe" href="#"><img width="130" height="130" src="http://xn--b1abgbpdxffpei.xn--p1ai/wp-content/uploads/2012/09/rogaining_perm-150x150.gif"></a></div><div class="si-individual title-wrap clearfix"><ul class="%2$s">%3$s</ul></div>'
					) );
	?>
	<?php /*
	<ul class="nav nav-list">
	<li class="nav-header">Золотая соточка</li>
	<!--li><a href="#"><i class="icon-calendar"></i>Календарь</a></li-->
	<li><a href="https://dl.dropbox.com/u/27417136/Regulation_about_GH-2012-signature.pdf"><i class="icon-file"></i>Положение</a></li>
	<!--li><a href="#"><i class="icon-globe"></i>Схема проезда</a></li-->
	<!--li><a href="#"><i class="icon-signal"></i>Ранг рогейнеров</a></li-->
	<ul>
	*/?>
</div>