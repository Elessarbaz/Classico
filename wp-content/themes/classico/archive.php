<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Classico
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--НАЧАЛО типовой заголовок-->
			<div class="heading">
				<div class="uk-container uk-container-center">
					<h2>Услуги центра косметологии Classico</h2>
				</div>
			</div>
			<!--КОНЕЦ типовой заголовок-->
			<div class="services">
				<div class="uk-container uk-container-center">
					<ul class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
						<?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'archive-single' );
							endwhile;
							the_posts_navigation();
						endif; ?>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
