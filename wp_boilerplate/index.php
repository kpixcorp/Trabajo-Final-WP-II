<?php get_header() ?>

<ul>
<?php
	$arg = array(
		'post_type'		 => 'products',
		'posts_per_page' => 3,
	);

	$get_arg = new WP_Query( $arg );

	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		
	<li>
		<?php the_post_thumbnail('medium') ?>
		<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		<?php the_excerpt() ?>
	</li>

	<?php } wp_reset_postdata();
?>
</ul>

<?php get_footer() ?>