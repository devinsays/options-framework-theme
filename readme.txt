=== Options Framework Theme ===

Contributors: Devin Price
Tags: options, theme options
Donate link: http://bit.ly/options-donate
Requires at least: 3.3
Tested up to: 3.3
Stable tag: 1.0
License: GPLv2

== Description ==

This is the adapted theme version of the Options Framework plugin.

The Options Framework makes it easy to include an options panel in any WordPress theme.  It was built so developers can concentrate on making the actual theme rather than spending time creating an options panel from scratch.

== Frequently Asked Questions ==

= How do I build options for my own theme? =

Just drag the admin folder of this theme, options.php and functions.php into the theme of your choice.

options.php is a blueprint for how to work with options.  It includes an example of every option available in the panel and sample output in the theme.

You can also watch the video screencast I have at [http://wptheming.com/options-framework-plugin](http://wptheming.com/options-framework-plugin).

= What options are available to use? =

* text
* textarea
* checkbox
* select
* radio
* upload (an image uploader)
* images (use images instead of radio buttons)
* background (a set of options to define a background)
* multicheck
* color (a jquery color picker)
* typography (a set of options to define typography)
* editor

== Changelog ==

= 1.1 =

* Move js example from functions.php to options.php
* Simplify functions.php, no check for child theme now
* Display admin menu link only if user has permissions (props @mindctrl)
* Added support for wp_editor
* Updated textarea settings to allow rows parameter
* Updated cursor:default for h3 metabox, props @yurifedorov
* Filtering of typography options (@mattwiebe)
* Updated methods for typography options
* Make uploader post type non-public (@samargulies)
* Change name of admin folder to inc

= 1.0 =

* Option header (h4) will not display in panel if name !isset (props @alepee)
* Fix for user roles when saving options
* Updated theme to no longer be a child of Twenty Eleven
* Updated textarea settings to allow rows parameter
* Updated cursor:default for h3 metabox, props @yurifedorov

= 0.9 =

* Load thickbox using site_url() to allow for https (props @samargulies)
* Change santization to use $allowedposttags for textarea and info
* Single checkboxes now use labels
* CSS updates for formatting long labels
* Allows dashes in the options id (props @mantone)
* Uses add_theme_page over add_submenu_page (props @enile8)

= 0.8 =

* Saves tab states using local storage
* Minor style updates for WordPress 3.2 release

= 0.7 =

* Added filtering for recognized arrays (like Font Face)
* Using isset rather than !empty to return of_get_option
* Significant updates for setting and restoring defaults
* Background option outputs no-repeat rather than none

= 0.6 =

* Introduces validation filters
* Better data sanitization and escaping
* Updates labels in options-interface.php
* Changes how checkboxes saved in database ("0" or "1")
* Stores typography, backgrounds and multichecks directly as arrays
* For full description, see: http://wptheming.com/2011/05/options-framework-0-6/

= 0.5 =

* Fixed errors when more than one multicheck options is used
* Updated optionsframework_setdefaults so defaults actually save on first run
* Require that all options have lowercase alphanumeric ids
* Added link to options from the WordPress admin bar

= 0.4 =

* Updated multicheck option to save keys rather than values
* Unset default array options after each output in optionsframework_setdefaults

= 0.3 =

* White listed options for increased security
* Fixed errors with checkbox and select boxes
* Improved the multicheck option and changed format

= 0.2 =

* Uploaded to the WordPress repository

= 0.1 =

* Initial release