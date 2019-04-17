<?php get_header() ?>

		<div class="container video__youtube">
			<div class="embed-responsive embed-responsive-16by9">
	  			<iframe class="embed-responsive-item" width="1000" height="562.5" src="https://www.youtube.com/embed/PkZXoE-E8vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
  				</iframe>
			</div>
  		</div>

<div class="row content">
		<div class="col-sm-12 col-md-4 content__leftside">
			<div class="leftside__info">
				<img src="<?php bloginfo("template_url") ?>/assets/images/chucaoneg.png" alt="Logo de Chucao">
			</div>
		</div>
		
		<div class="col-sm-12 col-md-6 content__rightside">
			<div class="rightside__featured feat1">
				<a href="https://www.instagram.com/chucao.cl/">
					<div class="featured__button">
						<h3>¡Síguenos en Instagram!</h3>
						<p>Actualizamos todos los días</p>
					</div>
				</a>
			</div>

			<div class="rightside__featured feat2">
				<a href="">
					<div class="featured__button">
						<h3>Visita nuestro canal de Youtube</h3>
						<p>Tutoriales, productos y más</p>
					</div>
				</a>
			</div>

			<div class="rightside__featured feat3">
				<a href="">
					<div class="featured__button">
						<h3>Nuestra cuenta de Twitter</h3>
						<p>¿Qué piensa nuestro equipo?</p>
					</div>
				</a>
			</div>

			<div class="rightside__featured feat4">
				<a href="">
					<div class="featured__button">
						<h3>Tienda Etsy</h3>
						<p>¡Nuestra tienda está abierta!</p>
					</div>
				</a>
			</div>
		</div>
</div>


	<div class= "row front__blog">
		<div class= "blog__title marker">
			<hr>
			<h2> ¡Últimas noticias!</h2>
			<hr>
		</div>

		<div class="front__mess col-md-offset-1">
			<?php
				$arg = array(
					'post_type'		 => 'blog',
					'posts_per_page' => 4,
				);

				$get_arg = new WP_Query( $arg );

				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
				?>
				<a href="<?php the_permalink() ?>" class= "blog__link">
					<div class="blog__entries col-md-5">
							<?php the_post_thumbnail('frontblog') ?>
						<div class= "entries__text">
							<span><?php the_title() ?></span>
							<p><?php the_excerpt()  ?></p>
						</div>
					</div>
				</a>
	 
				<?php } wp_reset_postdata();
			?>
		</div>
	</div>

<!-- Place somewhere in the <body> of your page -->

		<div class= "blog__title marker">
			<hr>
			<h2> Galería </h2>
			<hr>
		</div>

<div class="col-md-6 col-md-offset-3">
	<div class="flexslider">
	  <ul class="slides">
	  	<?php
	  		$arg = array(
	  			'post_type'		 => 'post',
	  			'posts_per_page' => 5,
	  		);
	  	
	  		$get_arg = new WP_Query( $arg );
	  	
	  		while ( $get_arg->have_posts() ) {
	  			$get_arg->the_post();
	  		?>
	  			
			    <li>
			      <?php the_post_thumbnail('slideshow') ?>
			    </li>
			  	
	  		<?php } wp_reset_postdata();
	  	?>

	  </ul>
</div>

	</div>




<?php get_footer() ?>


