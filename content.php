<?php
/**
 *
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- class="post type-post status-publish format-standard hentry category-general tag-design tag-images tag-style-guide tag-theme tag-visual post format-standard clearfix" -->
	<div class="post-header clearfix">
		<div class="thumbnail alignleft">
			<a class="thumbnail-link fademe" href="<?php the_permalink(); ?>" title="">
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail');
					}
				?>
				<!--img width="150" height="150" src="http://standardtheme.com/demo/wp-content/uploads/2012/03/style-guide.jpg" class="attachment-thumbnail wp-post-image" alt="style-guide" title="style-guide"-->
			</a>
		</div> <!-- /.thumbnail -->
		<div class="title-wrap clearfix">
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="post-header-meta">
				<?php rog_posted_on(); ?>
				<span class="the-comment-link">—&nbsp;<a href="http://standardtheme.com/demo/style-guide/#comments" title="Comment on The Complete Post Style Guide">4 Comments</a></span>
			</div><!-- /.post-header-meta -->
			<?php endif; ?>
		</div><!-- /.title-wrap -->
	</div><!-- /.post-header -->
	<div id="content-<?php the_ID(); ?>" class="entry-content clearfix">
		<p><?php the_content( __( 'Читать далее...', 'rogainingtheme' ) ); ?></p>
	</div><!-- /.entry-content -->
	<div class="post-meta clearfix">
		<div class="meta-date-cat-tags pull-left">
			<?php
				if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'rogainingtheme' ) );
				if ( $tags_list ): ?>
			<span class="the-tags">
				<?php printf( __( '%1$s', 'rogainingtheme' ), $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>		
		</div><!-- /meta-date-cat-tags -->
		<div class="meta-comment-link pull-right">
			<a class="pull-right post-link" href="<?php the_permalink(); ?>" title="permalink "><img src="<?php echo get_template_directory_uri(); ?>/img/icn-permalink.png" alt="permalink "></a>
		</div><!-- /meta-comment-link -->
	</div>
</article>