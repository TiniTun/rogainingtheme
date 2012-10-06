<?php
/**
 * RogainingPerm functions and definitions
 *
 * @package WordPress
 * @subpackage RogainingPerm
 * @since RogainingPerm 0.1
 *
 * Last Updated: 2012-09-10
 */

if ( ! isset( $content_width ) )
  $content_width = 770; /* pixels */

add_action( 'after_setup_theme', 'rogainingtheme_setup' );

if ( ! function_exists( 'rogainingtheme_setup' ) ):
function rogainingtheme_setup() {
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
	'primary' => 'В шапке',
	'footer' => 'Подвал',
	'left' => 'Левое',
	'left2' => 'Левое 2',
	) );
}
endif;


/**
 * Declaring the theme language domain
 */
load_theme_textdomain('rogainingtheme');

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function rog_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'rog_page_menu_args' );

/**
 * Custom Walker to change submenu class items from default "sub-menu" to ""
 */
class Rog_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  } 
}

function rog_widgets_init() {
	register_sidebar( array(
		'name' => 'Левый',
		'id' => 'sidebar-1',
		'description' => 'sidebar который находится слева',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'rog_widgets_init' );

if ( ! function_exists( 'rog_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own rog_posted_on to override in a child theme
 *
 * @since Rogaining Theme 1.0
 */
function rog_posted_on() {
	printf( '<!--span class="the-author"><a href="%2$s" title="%3$s">%4$s</a>&nbsp;—&nbsp;</span--><span class="the-time">%1$s</span>',
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'rogainingtheme' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;

if ( ! function_exists( 'rog_breadcrumbs' ) ) :
/**
 * Adding Breadcrumbs
 *
 */
 function rog_breadcrumbs() {

  $delimiter = '<span class="divider">/</span>';
  $home = 'Главная'; // text for the 'Home' link
  $before = '<li class="active">'; // tag before the current crumb
  $after = '</li>'; // tag after the current crumb

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<ul class="breadcrumb">';

    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_day() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page', 'bootstrapwp') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</ul>';

  }
} // end rog_breadcrumbs()
endif;

if ( ! function_exists( 'rog_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own rog_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function rog_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
  ?>
  <li class="post pingback">
    <p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
  <?php
      break;
    default :
  ?>
  <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID(); ?>">
      <div class="comment-container">
        <div class="avatar-holder">
          <?php
            $avatar_size = 68;
            if ( '0' != $comment->comment_parent )
              $avatar_size = 39;
            echo get_avatar( $comment, $avatar_size );
          ?>
        </div>
        <div class="comment-entry" id="comment-<?php comment_ID(); ?>">
          <div class="comment-head">
            <?php
            printf( __( '%1$s %2$s <span class="says">said:</span>', 'twentyeleven' ),
              sprintf( '<span class="name">%s</span>', get_comment_author_link() ),
              sprintf( '<span class="date"><a href="%1$s">%3$s</a></spam>',
                esc_url( get_comment_link( $comment->comment_ID ) ),
                get_comment_time( 'c' ),
                /* translators: 1: date, 2: time */
                sprintf( '%1$s at %2$s', get_comment_date(), get_comment_time() )
              )
            );
            ?>
            <?php edit_comment_link( 'Изменить','<span class="edit">', '</span>' ); ?>
            
            <?php if ( $comment->comment_approved == '0' ) : ?>
              <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
              <br />
            <?php endif; ?>
          </div>

          <div class="comment-text"><?php comment_text(); ?></div>
          
          <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Цитата <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
          </div><!-- .reply -->
        </div>
      </div>
  <?php
      break;
  endswitch;
}
endif; // ends check for rog_comment()



?>