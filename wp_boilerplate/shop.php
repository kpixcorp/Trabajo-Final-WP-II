<?php 

<?php
	$arg = array(
		'post_type'		 => 'shop',
		'category_name'	 => '',
		'posts_per_page' => 1,
		'offset'		 => 0,
		'post__not_in'	 => array($post->ID),
		'paged'			 => $paged
	);

	$get_arg = new WP_Query( $arg );

	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		
		<!-- Content -->

	<?php } wp_reset_postdata();
?>



 ?>