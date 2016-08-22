<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Classico
 */
$obj=get_queried_object();
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--НАЧАЛО типовой заголовок-->
			<div class="heading">
				<div class="uk-container uk-container-center">
					<h2>Услуги центра косметологии Classico</h2>
				</div>
			</div>
			<?php
			$args = array(
				'child_of'     => '',
				'parent'       => 2,
				'orderby'      => 'name',
				'order'        => 'ASC',
				'hide_empty'   => 1,
				'hierarchical' => 1,
				'exclude'      => '',
				'include'      => '',
				'number'       => 0,
				'taxonomy'     => 'category',
				'pad_counts'   => false,
				// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
			);
			$category=get_categories($args);
			?>
			<!--КОНЕЦ типовой заголовок-->
			<div class="services">
				<div class="uk-container uk-container-center">

					<div class="uk-grid">
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
							<ul class="services-menu-nav">
								<li>
									<a href="<?=get_term_link(2)?>"><?=get_category(2)->name?></a>
								</li>
								<?php
								foreach ($category as $value):?>
									<li>
										<a href="<?=get_term_link($value->term_id)?>"><?=$value->name?></a>
									</li>
								<?php endforeach;
								?>
							</ul>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
							<ul class="uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
								<?php
								query_posts(array('category_name'=>$obj->slug, 'numberposts'=>-1));
								if ( have_posts() ) : ?>
									<?php
									/* Start the Loop */
									while ( have_posts() ) : the_post();
										get_template_part( 'template-parts/content', 'archive-single' );
									endwhile;
								endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
