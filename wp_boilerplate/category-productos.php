<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		
	<div class="row single">
		<div class= "single_style col-md-9">
			<?php the_post(); ?>
			<h1><?php the_title() ?></h1>
			<p class= "single__date">
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
			</p>
			<?php the_post_thumbnail('blogarchive') ?>
			<hr>
			<div class= single__entry><?php the_content() ?></div>
		</div>
		<div class="sidebar col-md-3">
			<?php get_sidebar() ?>
		</div>
	</div>

	<?php } ?>
<?php } else { ?>
	<div class="row single">
		<div class= "single_style col-md-9">
			<p>No hay entradas</p>
		</div>
		<div class="sidebar col-md-3">
			<?php get_sidebar() ?>
		</div>
	</div>
<?php } wp_reset_query(); ?>

<?php get_footer() ?>
