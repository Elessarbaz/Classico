<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/unite-gallery.css">
</head>
<body>
<!--НАЧАЛО header-->
<header id="home">
	<p class="uk-container uk-container-center uk-clearfix">
            <span class="contacts">
				<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
                <a class="phone-number" href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a>
				<a class="phone-number" href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a>
            </span>

		<span class="social-icons">
                <a target="_blank" href="<?=get_field('instagram', 4)?>"><i class="uk-icon-instagram"></i></a>
				<a target="_blank" href="<?=get_field('facebook', 4)?>"><i class="uk-icon-facebook"></i></a>
				<a target="_blank" href="<?=get_field('vk', 4)?>"><i class="uk-icon-vk"></i></a>
				<!--<a target="_blank" href="<?/*=get_field('twitter', 4)*/?>"><i class="uk-icon-twitter"></i></a>-->
            </span>
	</p>
</header>
<!--КОНЕЦ header-->
<?php $menu = wp_get_nav_menu_items('top_menu') ?>
<?php /*var_dump($menu) */?>
<!--НАЧАЛО nav-and-logo-->
<div class="nav-and-logo">
	<div class="uk-container uk-container-center uk-flex uk-flex-bottom uk-flex-space-between">
		<a href="/"><img src="<?=get_field('logo',4)?>" alt="Клссико - центр эстетики" class="logo"></a>
		<nav class="uk-navbar" data-uk-sticky="{getWidthFrom:'body', top:-200, animation: 'uk-animation-slide-top'}">
			<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
				<?php foreach ($menu as $key => $item) {?>
						<li><a href="<?=$item->url ?>" ><?=$item->title?></a></li>
				<?php } ?>
			</ul>
			<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
		</nav>

		<div id="my-id" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
					<?php foreach ($menu as $key => $item) {?>
						<li><a href="<?=$item->url ?>"><?=$item->title?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ nav-and-logo-->