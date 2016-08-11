	<!--НАЧАЛО main-section-->
	<div class="uk-slidenav-position" data-uk-slideshow>
		<ul class="uk-slideshow">
			<?php $gallery = pp_gallery_get();
				foreach ($gallery as $image){
			?>
			<li>
				<div class="main-section  uk-flex uk-flex-center uk-flex-column" style="background-image: url(<?php echo $image->url?>)">
					<?php echo $image->description?>
				</div>
			</li>
			<?php }?>
		</ul>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	</div>
	<!--КОНЕЦ main-section-->



	<!--НАЧАЛО Услуги-->
	<!--НАЧАЛО типовой заголовок-->
	<div class="heading" id="services">
		<div class="uk-container uk-container-center">
			<h2>Услуги центра косметологии Classico</h2>
			<a href="/category/services/">Все услуги</a>
		</div>
	</div>
	<!--КОНЕЦ типовой заголовок-->
	<div class="services">
		<div class="uk-container uk-container-center">
			<ul class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
				<?php $posts=get_posts(array('category_name'=>'services','orderby'=>'ASC', 'numberposts'=>8));
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

	<!--НАЧАЛО О нас-->
	<!--НАЧАЛО типовой заголовок-->
	<div class="heading" id="about">
		<?php $post=get_post(26); setup_postdata($post); ?>
		<div class="uk-container uk-container-center">
			<h2><?=get_the_title()?></h2>
			<a href="<?=get_permalink(26)?>">Подробнее</a>
		</div>
	</div>
	<!--КОНЕЦ типовой заголовок-->
	<div class="about">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-1-2">
					<div class='embed-container'><img src="<?=get_the_post_thumbnail_url()?>" ></div>
				</div>
				<div class="uk-width-medium-1-2">
					<article>
					<?php the_content('') ?>
					</article>
				</div>
			</div>
		</div>
	</div>
	<?php wp_reset_query(); ?>
	<!--КОНЕЦ О нас-->

	<!--НАЧАЛО партнёры-->
	<!--НАЧАЛО типовой заголовок-->
	<div class="heading" id="partners">
		<div class="uk-container uk-container-center">
			<h2>Партнёры нашего центра</h2>
		</div>
	</div>
	<!--КОНЕЦ типовой заголовок-->
	<div class="partners">
		<div class="uk-container uk-container-center">
			<div class="data-uk-slider uk-slidenav-position" data-uk-slider>
				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-large uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
						<?php $gallery=pp_gallery_get();
						foreach ($gallery as $image):
						?>
						<li>
							<a href="<?=$image->description?>">
								<div class="img" style="background-image: url('<?=$image->url?>');"></div>
								<div class="partner-name">
									<p><?=$image->alt?></p>
								</div>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
					<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-left.png" alt="Предыдущее фото">
				</a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
					<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-right.png" alt="Следущее фото">
				</a>
			</div>
		</div>
	</div>
	<!--КОНЕЦ партнёры-->


	<!--НАЧАЛО Обучение-->
	<!--НАЧАЛО типовой заголовок-->
	<?php $post=get_post(31); setup_postdata($post); ?>
	<div class="heading" id="trainings">
		<div class="uk-container uk-container-center">
			<h2><?=get_the_title()?></h2>
			<a href="<?=get_permalink()?>">Подробнее</a>
		</div>
	</div>
	<!--КОНЕЦ типовой заголовок-->
	<div class="trainings">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-1-2">
					<img src="<?=get_the_post_thumbnail_url()?>">
				</div>
				<div class="uk-width-medium-1-2">
					<article>
					<?php the_content(''); ?>
					</article>
				</div>
			</div>
		</div>
	</div>
	<!--КОНЕЦ Обучение-->


	<!--НАЧАЛО оставить заявку-->
	<div class="feedback" id="feedback">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-2-3 uk-push-1-3 text-col">
					<!--НАЧАЛО типовой заголовок-->
					<div class="heading">
						<div class="uk-container uk-container-center">
							<h2>Оставить заявку</h2>
						</div>
					</div>
					<!--КОНЕЦ типовой заголовок-->
					<div class="text">
						<p class="success-mail-text" >Если у Вас возникли вопросы, <br>мы всегда рады на них ответить.</p>
					</div>

				</div>
				<div class="uk-width-medium-1-3 uk-pull-2-3 form-col">
					<form class="blink-mailer">
						<input type="hidden" name="title" value="Обратная связь">
						<input type="text" id="name" name="Имя" placeholder="Ваше имя">
						<input type="tel" id="phoneNumber" placeholder="Номер телефона" name="Номер телефона">
						<textarea name="Сообщение" id="msg" placeholder="Опишите, что Вас интересует"></textarea>
						<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--КОНЕЦ оставить заявку-->