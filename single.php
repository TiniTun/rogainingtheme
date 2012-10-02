<?php
/**
 *
 *
 */

get_header(); ?>
	
	<div id="main" class="span8 clearfix" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
			<?php rog_breadcrumbs(); ?>
			</div>

			<?php get_template_part( 'content', 'single' ); ?>

			<div id="single-post-nav">
				<ul class="pager">
					<li class="previous">
						<span class="previous-page">
							<?php previous_post_link( '%link', '<i class="icon-chevron-left"></i>&nbsp;%title' ); ?>
							<!--a href="http://standardtheme.com/demo/image-post-format/" rel="prev" title="Image Post Format"><i class="icon-chevron-left"></i>&nbsp;Image Post Format</a-->
						</span>
					</li>
					<li class="next">
						<span class="no-previous-page-link next-page">
							<?php previous_post_link( '%link', '&nbsp;%title<i class="icon-chevron-right"></i>&nbsp;' ); ?>
						</span>
					</li>
				</ul>
			</div>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->


<?php 
get_sidebar();
get_footer();
?>