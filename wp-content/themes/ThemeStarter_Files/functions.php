<?php
/* ========================================
    NAVIGATION MENUS
======================================== */
	function theme_nav_menus(){
	    register_nav_menus( array(
	        'main'=>'Main Menu',
	        'footer'=>'Footer Menu'
	        ) );
	}

	add_action('init','theme_nav_menus' );

	/* ========================================
	Featured Images
	======================================== */
	/* Adding support for Featured Images */
	add_theme_support( 'post-thumbnails' );

	/* add sizes for potential uses of featured images
		change to what you need and copy/paste to add more

		At the end is true of false
		false = no crop, just resizes so the image fits in the given box. preserves aspect ratio.
		true = crop, removes part of the image if it is over the given size
	*/
	add_image_size( 'feature-thumb', 300, 300, true ); //300x300 square image
	// "true" means cropping a picture
	add_image_size( 'feature-big-thumb', 500, 500, true ); //500 square image
	add_image_size( 'sidebar-thumb', 300, 300, false); //resizes image to fit in 300x300 size
	// "false" means shrink a picture
	add_image_size( 'feature-image', 600, 99999, false);//600 pixels wide (and unlimited height)

?>