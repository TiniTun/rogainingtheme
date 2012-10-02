<?php
/**
 * Main template
 *
 */
get_header();
?>
<div id="main" class="span8 clearfix" role="main">
	<?php if ( have_posts() ) :?> 
	<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
	<?php endif; ?>				
</div><!-- /#main -->
<!--div class="span2">
	<div class="well sidebar-nav">
		<script type="text/javascript" src="http://yandex.st/share/share.js" charset="utf-8"></script>
		<script type="text/javascript">
			  var YaShareInstance = new Ya.share({
						  element: 'ya_share',
						  elementStyle: {
						    type: 'none',
						    text: '',
						    quickServices: ['vkontakte', 'facebook', 'twitter', 'lj', 'gplus', 'evernote', ]
						  },
						  description:'11-12 августа 2012, Открытые соревнования по велорогейну и классическому рогейну, 24 часа - Челяба 2012',
						  image: 'http://rogaining.ru/images/stories/news/rogaining_perm.gif'
						});
			  YaShareInstance.updateShareLink('http://рогейнвперми.рф', 'rogaining');
			</script>
			<div id="ya_share"></div>
	</div>
</div-->
<?php
get_sidebar();
get_footer();
?>