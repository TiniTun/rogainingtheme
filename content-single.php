<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				<?php if ( comments_open() ) : ?>
				<span class="the-comment-link">—&nbsp;<?php comments_popup_link( '0 комментариев', '1 комментарий','% комментария' ); ?></span>
				<?php endif; // End if comments_open() ?>
			</div><!-- /.post-header-meta -->
			<?php endif; ?>
		</div><!-- /.title-wrap -->
	</div><!-- /.post-header -->
	<div id="content-<?php the_ID(); ?>" class="entry-content clearfix">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rogainingtheme' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Страницы' . '</span>', 'after' => '</div>' ) ); ?>
	</div>
	<div class="post-meta clearfix">
		<div class="meta-date-cat-tags pull-left">
			<?php
				if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', ', ');
				if ( $tags_list ): ?>
			<span class="the-tags">
				<?php printf('%1$s', $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>		
		</div><!-- /meta-date-cat-tags -->
		<div class="meta-comment-link pull-right">
			<a class="pull-right post-link" href="<?php the_permalink(); ?>" title="permalink "><img src="<?php echo get_template_directory_uri(); ?>/img/icn-permalink.png" alt="permalink "></a>
		</div><!-- /meta-comment-link -->
	</div>
	<?php /*
	<div id="author-box" class="well clearfix">
		<div class="author-box-image">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
			<img alt="" src="http://1.gravatar.com/avatar/504dc56f3429f8848dfd4320fb0f156b?s=96&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&amp;r=G" class="avatar avatar-96 photo" height="96" width="96">
		</div><!-- /.author-box-image -->
		<h4 class="author-box-name">jared</h4>
		<p>
			<a class="author-link author-posts-url" href="http://standardtheme.com/demo/author/jared/" title="jared Posts">Posts</a>
		</p>
	</div>
	*/ ?>
</article>