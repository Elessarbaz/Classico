<li>
	<div class="img" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
	</div>
	<div class="text-section">
		<h3><?=get_the_title()?></h3>
		<p>
			<?php the_content() ?>
		</p>
		<a href="<?=get_permalink()?>">Подробнее</a>
	</div>
</li>