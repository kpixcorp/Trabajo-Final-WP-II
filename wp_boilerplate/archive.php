<?php get_header() ?>

	<?php if (have_posts()) { ?>
	<ul class= "archive col-md-9">
		<?php while ( have_posts() ) { the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('frontblog') ?>
				<hr>
				<span><?php the_title() ?></span>
				<p class= "single__date">
					<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				</p>
				<hr>
				<?php the_excerpt() ?>
			</a>
		</li>
		<?php }; ?>
	</ul>
//
	<?php } else { ?>
		<!-- Content -->
		<p>No hay elementos</p>
	<?php } wp_reset_query(); ?>

	<div class="col-md-3 sidebar"><?php get_sidebar() ?></div>
<?php get_footer() ?>