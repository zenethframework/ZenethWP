<?php
/**
 * Main stylesheets & Scripts Enqueue File.
 *
 * @package ZenethWP
 * @author Zeneth Team
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

 /**
  * Adds custom classes to the array of body classes.
  *
  * @param array $classes Classes for the body element.
  * @return array
  */
 function zenethwp_body_classes( $classes ) {
 	// Adds a class of hfeed to non-singular pages.
 	if ( ! is_singular() ) {
 		$classes[] = 'hfeed';
 	}

 	// Adds a class of no-sidebar when there is no sidebar present.
 	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
 		$classes[] = 'no-sidebar';
 	}

 	return $classes;
 }
 add_filter( 'body_class', 'zenethwp_body_classes' );

 /**
  * Add a pingback url auto-discovery header for single posts, pages, or attachments.
  */
 function zenethwp_pingback_header() {
 	if ( is_singular() && pings_open() ) {
 		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
 	}
 }
 add_action( 'wp_head', 'zenethwp_pingback_header' );

 if ( ! function_exists( 'zenethwp_posted_on' ) ) :
 	/**
 	 * Prints HTML with meta information for the current post-date/time.
 	 */
 	function zenethwp_posted_on() {
 		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
 		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
 			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
 		}

 		$time_string = sprintf( $time_string,
 			esc_attr( get_the_date( DATE_W3C ) ),
 			esc_html( get_the_date() ),
 			esc_attr( get_the_modified_date( DATE_W3C ) ),
 			esc_html( get_the_modified_date() )
 		);

 		$posted_on = sprintf(
 			/* translators: %s: post date. */
 			esc_html_x( 'Posted on %s', 'post date', 'zenethwp' ),
 			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
 		);

 		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

 	}
 endif;

 if ( ! function_exists( 'zenethwp_posted_by' ) ) :
 	/**
 	 * Prints HTML with meta information for the current author.
 	 */
 	function zenethwp_posted_by() {
 		$byline = sprintf(
 			/* translators: %s: post author. */
 			esc_html_x( 'by %s', 'post author', 'zenethwp' ),
 			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
 		);

 		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

 	}
 endif;

 if ( ! function_exists( 'zenethwp_entry_footer' ) ) :
 	/**
 	 * Prints HTML with meta information for the categories, tags and comments.
 	 */
 	function zenethwp_entry_footer() {
 		// Hide category and tag text for pages.
 		if ( 'post' === get_post_type() ) {
 			/* translators: used between list items, there is a space after the comma */
 			$categories_list = get_the_category_list( esc_html__( ', ', 'zenethwp' ) );
 			if ( $categories_list ) {
 				/* translators: 1: list of categories. */
 				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'zenethwp' ) . '</span>', $categories_list ); // WPCS: XSS OK.
 			}

 			/* translators: used between list items, there is a space after the comma */
 			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'zenethwp' ) );
 			if ( $tags_list ) {
 				/* translators: 1: list of tags. */
 				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'zenethwp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
 			}
 		}

 		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
 			echo '<span class="comments-link">';
 			comments_popup_link(
 				sprintf(
 					wp_kses(
 						/* translators: %s: post title */
 						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'zenethwp' ),
 						array(
 							'span' => array(
 								'class' => array(),
 							),
 						)
 					),
 					get_the_title()
 				)
 			);
 			echo '</span>';
 		}

 		edit_post_link(
 			sprintf(
 				wp_kses(
 					/* translators: %s: Name of current post. Only visible to screen readers */
 					__( 'Edit <span class="screen-reader-text">%s</span>', 'zenethwp' ),
 					array(
 						'span' => array(
 							'class' => array(),
 						),
 					)
 				),
 				get_the_title()
 			),
 			'<span class="edit-link">',
 			'</span>'
 		);
 	}
 endif;

 if ( ! function_exists( 'zenethwp_post_thumbnail' ) ) :
 	/**
 	 * Displays an optional post thumbnail.
 	 *
 	 * Wraps the post thumbnail in an anchor element on index views, or a div
 	 * element when on single views.
 	 */
 	function zenethwp_post_thumbnail() {
 		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
 			return;
 		}

 		if ( is_singular() ) :
 			?>

 			<div class="post-thumbnail">
 				<?php the_post_thumbnail(); ?>
 			</div><!-- .post-thumbnail -->

 		<?php else : ?>

 		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
 			<?php
 			the_post_thumbnail( 'post-thumbnail', array(
 				'alt' => the_title_attribute( array(
 					'echo' => false,
 				) ),
 			) );
 			?>
 		</a>

 		<?php
 		endif; // End is_singular().
 	}
 endif;
