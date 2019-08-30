<?php
/**
 * Template Name: Left Sidebar
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package ZenethWP
 */

get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
    <div class="col-lg-8">
      <div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>

				</main>
			</div>
    </div>
  </div>
</div>

<?php
get_footer();
