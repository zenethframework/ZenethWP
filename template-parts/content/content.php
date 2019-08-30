<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZenethWP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-container">
		<header class="entry-header">
			<?php
			/**
			 * Entry header partial.
			 *
			 * @since 1.0.0
			 *
			 */
			 get_template_part( 'template-parts/post/entry', 'header' );
			?>
		</header>

		<?php zenethwp_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				/**
				 * Entry Content partial.
				 *
				 * @since 1.0.0
				 *
				 */
				 get_template_part( 'template-parts/post/entry', 'content' );
				?>
			</div>

		<footer class="entry-footer">
			<?php
			/**
			 * Entry Footer partial.
			 *
			 * @since 1.0.0
			 *
			 */
			 zenethwp_entry_footer();
			?>
		</footer>
	</div>
</article>
