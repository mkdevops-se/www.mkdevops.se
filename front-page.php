<?php
/**
 * The template for displaying a default front page
 *
 * If the user has selected a static page for their homepage, that is what will
 * appear instead.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www.mkdevops.se
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
			get_template_part( 'template-parts/content', 'front-page' );
		?>

	</main><!-- #main -->

<?php
get_footer();
