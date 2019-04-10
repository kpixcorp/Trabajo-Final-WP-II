<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

	<div class="row page">
		<div class= "page_style">
			<h1><?php the_title() ?></h1>
			<br>
			<div class="page__content"><?php the_post_thumbnail('') ?></div>
			<br>
			<p class= "page__date"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
			</p>
			<p><?php the_content() ?></p>
		</div>
	</div>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>

