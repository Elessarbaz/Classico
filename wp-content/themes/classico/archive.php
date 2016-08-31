<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Classico
 */
$obj=get_queried_object();
$query_url=$_SERVER['REDIRECT_URL'];
$post=count(get_posts(array('category_name'=>$obj->slug,'posts_per_page'=>-1)));
$page_post=get_option('posts_per_page');
$page_count=ceil($post/$page_post);
$page_num=(int)get_query_var('page');
$offset=$page_num*$page_post;;
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
					<ul>
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
					<ul class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
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
			<div class="services">
			<?php if($page_count>1):?>
				<!--НАЧАЛО пагинация-->
				<ul class="uk-pagination">
					<li style="display: inline-block" ><a href="<?=$query_url?>?page=0"><i class="uk-icon-angle-double-left"></i></a></li>
					<?php for ($i=0; $i<$page_count; $i++): $class=''; if ($i==$page_num){$class='class="uk-active"';} ?>
						<li style="display: inline-block" data-id="<?=$i?>" data-id1="<?=$page_num?>" <?=$class?> >
							<a href="<?=$query_url.'?page='.$i?>">
								<?=$i+1?>
							</a>
						</li>
					<?php endfor; ?>
					<li style="display: inline-block" ><a href="<?=$query_url?>?page=<?=$page_count-1?>"><i class="uk-icon-angle-double-right"></i></a></li>
				</ul>
			<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
