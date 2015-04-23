<?php

if (function_exists('register_nav_menus')){
	register_nav_menus(
			array (
					'main_nav' => 'Main Navigation Menu'
			)
	);
}

//enable post thumbnails

$args = array (
		'height' => 80,
		'width' => 104,
		'default_image' => get_template_directory_uri() . '/images/pes.jpg',
);

add_theme_support('custom-header', $args);
