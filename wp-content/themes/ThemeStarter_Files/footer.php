		<footer>
			<?php
		        $settings = array(
		            'theme_location'  => 'footer',
    				'menu_class' =>'footer'
		            );

		        wp_nav_menu( $settings );
	 	   ?>
			<p class="copyright">&copy; <?php echo date('Y'); ?></p>

			<p class="designedby">designed by Sayaka Tamura</p>
		</footer>

	</div> <!-- end wrapper -->
	<?php wp_footer(); ?>
</body>
</html>