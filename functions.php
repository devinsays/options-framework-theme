<?php

/* 
 * Loads the Options Panel
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/admin/' );
	require_once dirname( __FILE__ ) . '/admin/options-framework.php';
}