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
 * A warning notice the commits might be unstable until 1.1 is finished
 */

function options_framework_theme_notice(){
	global $pagenow;
	if ( $pagenow == 'themes.php' ) {
    	echo '<div class="updated">
    	<p>Options Framework Theme is under development at the moment.  Get a stable <a href="https://github.com/devinsays/options-framework-theme/tags">version here</a>.</p>
    	</div>';
    }
}
add_action('admin_notices', 'options_framework_theme_notice');