<?php

?>

<div id="comments" class="clearfix">
	<?php if ( have_comments() ) : ?>
	<h3>
		<?php
			printf( _n( 'Один комментарий в теме &ldquo;%2$s&rdquo;', '%1$s коментариев в теме &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyeleven' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
		?>
	</h3>
	<ol class="commentlist">
		<?php 
			wp_list_comments( array( 'callback' => 'rog_comment' ) );
		?>
	</ol>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>