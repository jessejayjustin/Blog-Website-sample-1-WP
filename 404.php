<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp_starter_kit
 */

get_header();
?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main">
            <div class="wrapper">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp_starter_kit' ); ?></h1>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
