<?php

/* 
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}

/* 
 * Temporary notice, will be removed once file uploader
 * is stable
 */
function optionsframework_admin_notice(){
    echo '<div class="updated">
       <p>Options Framework Development Version: Help test the <a href="https://github.com/devinsays/options-framework-plugin/issues/135#issuecomment-12031802">new file uploader</a></p>
    </div>';
}

add_action( 'admin_notices', 'optionsframework_admin_notice' );