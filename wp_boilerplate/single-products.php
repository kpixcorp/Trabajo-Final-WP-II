<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php $dispo = get_field('disponibilidad') ?>
	<div class="row single">
		<div class= "single_style col-md-9">
			<?php the_post(); ?>
			<h1><?php the_title() ?></h1>
			<p class= "products__tipo"><?php the_field('tipo') ?></p>
			<?php the_post_thumbnail('slideshow') ?>
			<hr>
				<p class= "products__precio">$<?php the_field('precio') ?></p>
				<?php if ($dispo): 
					echo "<p class= 'products__disponible'>Disponible</p> "
					?>	
				<?php else:
					echo "<p class= 'products__nodisponible'>No disponible</p>"
				 ?>
				<?php endif ?>
			<div class= single__entry><?php the_content() ?></div>
		</div>
		<div class="sidebar col-md-3">
			<?php get_sidebar() ?>
		</div>
	</div>

	<?php } ?>
<?php } else { ?>
	<?php get_sidebar() ?>
<?php } wp_reset_query(); ?>

<?php get_footer() ?>