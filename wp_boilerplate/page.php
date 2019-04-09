<?php get_header() ?>
	<?php the_post() ?>
	
	<div class= "container page_style">
	<?php the_post_thumbnail('large') ?>
	<br>
	<h1><?php the_title() ?></h1>
	<br>
	<?php the_content(); ?>
	</div>

<?php get_footer() ?>