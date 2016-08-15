
	<!--НАЧАЛО Услуги-->
	<!--НАЧАЛО типовой заголовок-->
	<div class="heading" id="services">
		<div class="uk-container uk-container-center">
			<h2>Галерея Classico</h2>
		</div>
	</div>
	<!--КОНЕЦ типовой заголовок-->
	<div class="services">
		<div class="uk-container uk-container-center">
			<ul class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
				<?php $posts=get_posts(array('category_name'=>'gallery','orderby'=>'ASC'));
				foreach ($posts as $post): setup_postdata($post);
				?>
				<li>
					<div class="img" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
					</div>
					<div class="text-section">
						<h3><?=get_the_title()?></h3>
						<p>
							<?php the_content('') ?>
						</p>
						<a href="<?=get_permalink()?>">Подробнее</a>
					</div>
				</li>
				<?php endforeach; wp_reset_query(); ?>
			</ul>
		</div>
	</div>
	<!--КОНЕЦ Услуги-->
