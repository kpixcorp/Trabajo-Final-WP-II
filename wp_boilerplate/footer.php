<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>

	<div class="row footer">
		<div class="col-sm-12 footer__info">
			<hr>
			<p>© 2019 Tienda Chucao - All Right Reserved</p>
		</div>


	</div>
</body>
</html>