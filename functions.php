<?php

/* 
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/admin/' );
	require_once dirname( __FILE__ ) . '/admin/options-framework.php';
}