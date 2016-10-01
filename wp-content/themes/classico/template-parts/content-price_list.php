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
</div>