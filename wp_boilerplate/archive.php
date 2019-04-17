<?php get_header() ?>

	<?php if (have_posts()) { ?>
	<ul class= "archive col-md-9">
		<?php while ( have_posts() ) { the_post(); ?>
			<a href="<?php the_permalink() ?>">
				<li>
					<?php the_post_thumbnail('blogarchive') ?>
					<hr>
					<span><?php the_title() ?></span>
					<p class= "single__date">
						<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
					</p>
					<hr>
					<?php the_excerpt() ?>
			</li>
		</a>
		<?php }; ?>
	</ul>
//
	<?php } else { ?>
		<!-- Content -->
		<p>No hay elementos</p>
	<?php } wp_reset_query(); ?>

	<div class="col-md-3 sidebar"><?php get_sidebar() ?></div>
<?php get_footer() ?>