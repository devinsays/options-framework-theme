<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace('/\W/', '', strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$test_array = array('one' => __('One', 'optionsframework'), 'two' => __('Two', 'optionsframework'), 'three' => __('Three', 'optionsframework'), 'four' => __('Four', 'optionsframework'), 'five' => __('Five', 'optionsframework'));
	
	// Multicheck Array
	$multicheck_array = array('one' => __('French Toast', 'optionsframework'), 'two' => __('Pancake', 'optionsframework'), 'three' => __('Omelette', 'optionsframework'), 'four' => __('Crepe', 'optionsframework'), 'five' => __('Waffle', 'optionsframework'));
	
	// Multicheck Defaults
	$multicheck_defaults = array('one' => '1','five' => '1');
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('template_directory') . '/images/';
		
	$options = array();
		
	$options[] = array( 'name' => __('Basic Settings', 'optionsframework'),
						'type' => 'heading');
							
	$options[] = array( 'name' => __('Input Text Mini', 'optionsframework'),
						'desc' => __('A mini text input field.', 'optionsframework'),
						'id' => 'example_text_mini',
						'std' => 'Default',
						'class' => 'mini',
						'type' => 'text');
								
	$options[] = array( 'name' => __('Input Text', 'optionsframework'),
						'desc' => __('A text input field.', 'optionsframework'),
						'id' => 'example_text',
						'std' => 'Default Value',
						'type' => 'text');
							
	$options[] = array( 'name' => __('Textarea', 'optionsframework'),
						'desc' => __('Textarea description.', 'optionsframework'),
						'id' => 'example_textarea',
						'std' => 'Default Text',
						'type' => 'textarea'); 
						
	$options[] = array( 'name' => __('Input Select Small', 'optionsframework'),
						'desc' => __('Small Select Box.', 'optionsframework'),
						'id' => 'example_select',
						'std' => 'three',
						'type' => 'select',
						'class' => 'mini', //mini, tiny, small
						'options' => $test_array);			 
						
	$options[] = array( 'name' => __('Input Select Wide', 'optionsframework'),
						'desc' => __('A wider select box.', 'optionsframework'),
						'id' => 'example_select_wide',
						'std' => 'two',
						'type' => 'select',
						'options' => $test_array);
						
	$options[] = array( 'name' => __('Select a Category', 'optionsframework'),
						'desc' => __('Passed an array of categories with cat_ID and cat_name', 'optionsframework'),
						'id' => 'example_select_categories',
						'type' => 'select',
						'options' => $options_categories);
						
	$options[] = array( 'name' => __('Select a Page', 'optionsframework'),
						'desc' => __('Passed an pages with ID and post_title', 'optionsframework'),
						'id' => 'example_select_pages',
						'type' => 'select',
						'options' => $options_pages);
						
	$options[] = array( 'name' => __('Input Radio (one)', 'optionsframework'),
						'desc' => __('Radio select with default options "one".', 'optionsframework'),
						'id' => 'example_radio',
						'std' => 'one',
						'type' => 'radio',
						'options' => $test_array);
							
	$options[] = array( 'name' => __('Example Info', 'optionsframework'),
						'desc' => __('This is just some example information you can put in the panel.', 'optionsframework'),
						'type' => 'info');
											
	$options[] = array( 'name' => __('Input Checkbox', 'optionsframework'),
						'desc' => __('Example checkbox, defaults to true.', 'optionsframework'),
						'id' => 'example_checkbox',
						'std' => '1',
						'type' => 'checkbox');
						
	$options[] = array( 'name' => __('Advanced Settings', 'optionsframework'),
						'type' => 'heading');
						
	$options[] = array( 'name' => __('Check to Show a Hidden Text Input', 'optionsframework'),
						'desc' => __('Click here and see what happens.', 'optionsframework'),
						'id' => 'example_showhidden',
						'type' => 'checkbox');
	
	$options[] = array( 'name' => __('Hidden Text Input', 'optionsframework'),
						'desc' => __('This option is hidden unless activated by a checkbox click.', 'optionsframework'),
						'id' => 'example_text_hidden',
						'std' => 'Hello',
						'class' => 'hidden',
						'type' => 'text');
						
	$options[] = array( 'name' => __('Uploader Test', 'optionsframework'),
						'desc' => __('This creates a full size uploader that previews the image.', 'optionsframework'),
						'id' => 'example_uploader',
						'type' => 'upload');
						
	$options[] = array( 'name' => __('Example Image Selector', 'optionsframework'),
						'desc' => __('Images for layout.', 'optionsframework'),
						'id' => 'example_images',
						'std' => '2c-l-fixed',
						'type' => 'images',
						'options' => array(
							'1col-fixed' => $imagepath . '1col.png',
							'2c-l-fixed' => $imagepath . '2cl.png',
							'2c-r-fixed' => $imagepath . '2cr.png')
						);
						
	$options[] = array( 'name' =>  __('Example Background', 'optionsframework'),
						'desc' => __('Change the background CSS.', 'optionsframework'),
						'id' => 'example_background',
						'std' => $background_defaults, 
						'type' => 'background');
								
	$options[] = array( 'name' => __('Multicheck', 'optionsframework'),
						'desc' => __('Multicheck description.', 'optionsframework'),
						'id' => 'example_multicheck',
						'std' => $multicheck_defaults, // These items get checked by default
						'type' => 'multicheck',
						'options' => $multicheck_array);
							
	$options[] = array( 'name' => __('Colorpicker', 'optionsframework'),
						'desc' => __('No color selected by default.', 'optionsframework'),
						'id' => 'example_colorpicker',
						'std' => '',
						'type' => 'color');
						
	$options[] = array( 'name' => __('Typography', 'optionsframework'),
						'desc' => __('Example typography.', 'optionsframework'),
						'id' => 'example_typography',
						'std' => array('size' => '12px','face' => 'verdana','style' => 'bold italic','color' => '#123456'),
						'type' => 'typography');			
	return $options;
}

/* 
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});
	
	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}
	
});
</script>

<?php
}