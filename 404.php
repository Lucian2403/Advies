<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package advies
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'advies' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try going back or a search?', 'advies' ); ?></p>

					<?php
					get_search_form();

                    $error_image = get_field('error_image', 'option'); ?>
                    <section class="error_image" style="background-image: url(<?php echo $error_image['url'] ?>");></section>


				</div><!-- .page-content -->
                <div id="home_button">
                    <a class="button button_primary home_button" href="<?php the_field('home_button_url', 'option') ?>"><?php the_field('home_button_text', 'option') ?></a>
                </div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
