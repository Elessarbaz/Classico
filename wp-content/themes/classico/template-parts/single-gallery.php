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
			<?php the_content() ?>
			</article>
			<div class="uk-grid">
				<?php $gallery = pp_gallery_get()?>
				<div class="uk-width-1-1" id="preloader">

				</div>
				<div class="uk-width-1-1">
					<div id="unitegallery-1">
						<?php foreach ($gallery as $image): ?>
							<img alt="<?=$image->alt?>" src="<?=$image->url?>"
								 data-image="<?=$image->url?>"
								 data-description="Фото">
						<?php endforeach; ?>
					</div>
				</div>
				<script>

				</script>
			</div>
		</div>
	</div>
</div>