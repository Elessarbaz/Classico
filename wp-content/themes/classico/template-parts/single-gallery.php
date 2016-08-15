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
				<?php foreach ($gallery as $image){?>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<a href="<?php echo $image->url?>" data-uk-lightbox="{group:'album'}">
							<div class="image-gallery" style="background-image: url(<?php echo $image->url?>)"></div>
						</a>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>