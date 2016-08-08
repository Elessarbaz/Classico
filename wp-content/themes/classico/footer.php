<!--НАЧАЛО оставить заявку-->
<footer id="footer">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-1-3 contacts-col">
				<img src="<?=get_field('logo-f',4)?>" alt="Лого" class="logo">
				<h3>Наши контакты</h3>
				<div class="address-container">
					<p class="address"><?=get_field('address',4)?></p>
				</div>
				<div class="phone-and-email">
					<p><a class="phone-number" href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a> <br>
						<a class="phone-number" href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a> <br>
						<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
					</p>
				</div>
				<span class="social-icons">
                        <a target="_blank" href="<?=get_field('instagram')?>"><i class="uk-icon-instagram"></i></a>
                        <a target="_blank" href="<?=get_field('facebook')?>"><i class="uk-icon-facebook"></i></a>
                        <a target="_blank" href="<?=get_field('vk')?>"><i class="uk-icon-vk"></i></a>
                        <a target="_blank" href="<?=get_field('twitter')?>"><i class="uk-icon-twitter"></i></a>
                    </span>
			</div>
			<div class="uk-width-medium-2-3">
				<?=get_field('map',4)?>
			</div>
		</div>
	</div>
</footer>
<!--КОНЕЦ оставить заявку-->


<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script>
	$("table").addClass('uk-table uk-table-striped uk-table-hover');
</script>
<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('.success-mail-text').html(success); $('.success-mail-text').show(500);  }, function(error) {});
</script>
<script>
	var el = document.querySelector('input[type="tel"]');
	console.log();
	VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>
<?php //wp_footer() ?>
</body>
</html>