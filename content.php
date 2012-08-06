<?php
/**
 *
 *
 */
?>
<article id="post-<?php the_ID(); ?>" class="news-box"<?php post_class(); ?>>
	<div class="row-fluid">
		<div class="span3">
			<a href="#" class="thumbnail_">
				<img src="http://rogaining.ru/images/stories/news/rogaining_perm.gif" alt="">
			</a>
		</div>
		<div class="span9">
			<header>
				<h2><?php the_title(); ?></a></h2>
			</header>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rogainingtheme' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="pagination"><span>' . __( 'Pages:', 'rogainingtheme' ) . '</span>', 'after' => '</div>' ) ); ?>
			<!--a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'rogainingtheme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="btn pull-right">Подробнее >></a-->
		</div>
	</div>
</article>