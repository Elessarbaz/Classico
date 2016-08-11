<!--НАЧАЛО типовой заголовок-->
<div class="heading">
	<div class="uk-container uk-container-center">
		<h2><?=get_the_title()?></h2>
	</div>
</div>
<!--КОНЕЦ типовой заголовок-->
<div class="single-service">
	<div class="uk-container uk-container-center">
		<div class="content">
			<article>
			<img src="<?=get_the_post_thumbnail_url()?>" class="float-right-img">
			<?php the_content() ?>
			</article>
		</div>
	</div>
		<div class="padding-background">
			<div class="services">
				<div class="uk-container uk-container-center">
					<ul class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
						<?php $posts=get_posts(array('category_name'=>'services','orderby'=>'rand', 'numberposts'=>4));
						foreach ($posts as $post): setup_postdata($post);
							?>
							<li>
								<div class="padding-two">
									<div class="img" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
									</div>
									<div class="text-section">
										<h3><?=get_the_title()?></h3>
										<a href="<?=get_permalink()?>">Подробнее</a>
									</div>
								</div>
							</li>
						<?php endforeach; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</div>
</div>