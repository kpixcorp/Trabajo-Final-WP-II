<?php get_header() ?>

	<?php if (have_posts()) { ?>
	<ul class= "products col-md-12">
		<hr>
		<h1>Productos Chucao</h1>
		<hr>
		<?php while ( have_posts() ) { the_post(); ?>
			<?php $dispo = get_field('disponibilidad') ?>

			<div class="col-md-3">
				<li>
					<a href="<?php the_permalink() ?>">
					<h4><?php the_title() ?></h4>
					<?php the_post_thumbnail() ?>
					<p class= "products__precio">$<?php the_field('precio') ?></p>
					<p class= "products__tipo"><?php the_field('tipo') ?></p>
					<?php if ($dispo): 
						echo "<p class= 'products__disponible'>Disponible</p> "
						?>	
					<?php else:
						echo "<p class= 'products__nodisponible'>No disponible</p>"
					 ?>
					<?php endif ?>
					</a>
				</li>
			</div>
		<?php }; ?>
	</ul>
//
	<?php } else { ?>
		<!-- Content -->
		<p>No hay elementos</p>
	<?php } wp_reset_query(); ?>

<?php get_footer() ?>