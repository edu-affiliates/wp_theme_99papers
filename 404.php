<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp_theme_99papers
 */

get_header('short'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main three-paragraphs-aside three-paragraphs-aside--404" role="main">
			<img class="img-404" src="/wp-content/themes/wp_theme_99papers/img/404.png" alt="404" title="Oops! That page can't be found">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp_theme_99papers' ); ?></h1>
				</header><!-- .page-header -->
			</section><!-- .error-404 -->
			<a class="button-404" href="<?php echo get_site_url(); ?>">Go to main page</a>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
