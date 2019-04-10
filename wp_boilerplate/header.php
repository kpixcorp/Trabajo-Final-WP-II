<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php get_template_part('_includes/chucao', 'fonts') ?>
	<?php wp_head() ?>
</head>
<body>

	<header class="row header">
		<div class="col-sm-12 header__brand">

			<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo("template_url") ?>/assets/images/chucaowhit.png" alt="Logo de la tienda Chucao"></a>

			<!--<ul class="brand__menu">
				<a href=""><li><i class="fas fa-home"></i>Home</li></a>
				<li>∙</li>
				<a href=""><li><i class="fas fa-crow"></i>Sobre Chucao</li></a>
				<li>∙</li>
				<a href=""><li><i class="fas fa-shopping-bag"></i>Tienda</li></a>
				<li>∙</li>
				<a href=""><li><i class="fas fa-pencil-alt"></i>Blog</li></a>
				<li>∙</li>
				<a href=""><li><i class="fas fa-video"></i>Tutoriales</li></a>
				<li>∙</li>
				<a href=""><li><i class="fas fa-flag-usa"></i> English</li></a>
			</ul>-->
			<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu(
					array( 
						'theme_location'	=> 'header-menu',
						'container'			=> null,
						'menu_class'		=> 'brand__menu'
				) ); ?>
			<?php } ?>

		</div>
	</header>
