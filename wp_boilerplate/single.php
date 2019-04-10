<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		
	<div class="row page">
		<div class= "page_style col-md-8">
			<?php the_post(); ?>
			<h1><?php the_title() ?></h1>
			<br>
			<div class="page__content"><?php the_post_thumbnail('') ?></div>
			<p class= "page__date"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
			</p>
			<p><?php the_content() ?></p>
		</div>
		<div class="sidebar col-md-4">
			<?php get_sidebar() ?>
		</div>
	</div>

	<?php } ?>
<?php } else { ?>
	<?php get_sidebar() ?>
<?php } wp_reset_query(); ?>

<?php get_footer() ?>

