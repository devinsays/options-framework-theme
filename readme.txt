=== Options Framework Theme ===

Contributors: Devin Price
Tags: options, theme options
Donate link: http://bit.ly/options-donate-2
Requires at least: 3.6
Tested up to: 3.8
Stable tag: 1.7
License: GPLv2

== Description ==

This is the adapted theme version of the Options Framework plugin.

The Options Framework makes it easy to include an options panel in any WordPress theme.  It was built so developers can concentrate on making the actual theme rather than spending time creating an options panel from scratch.

== Frequently Asked Questions ==

= How do I build options for my own theme? =

Just drag the "inc" folder of this theme, options.php and functions.php into the theme of your choice.

options.php is a blueprint for how to work with options.  It includes an example of every option available in the panel and sample output in the theme.

You can also watch the video screencast I have at [http://wptheming.com/options-framework-theme](http://wptheming.com/options-framework-theme).

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

= 1.7.2 =

* Increase text input width
* Rename add_options_page function to resolve automatic theme check conflicts
* Check isset for $value['desc'] in info option
* Only load styles on options page (props @AndorChen)

= 1.7.1 =

* Fix to use option name if set in options.php

= 1.7.0 =

* Update to class based plugin (large code refactor)
* Drop color picker support for older versions of WordPress
* Allow option pages without tabs

= 1.6.1 =

* Fix for update notice location
* Use checked() function more consistently (props @vinodvdalvi)
* Reuse media modal for uploads
* Avoid error if $options array not set (props @albyrock87)

= 1.6 =

* JS/CSS should only load on options page
* Make options filterable like plugin version
* Allow media buttons in the editor option
* Menu settings filter
* Fix js bindings for upload modal (props @themeblvd)

= 1.5.2 =

* Removed updater script, it was causing issues with attachments

= 1.5 =

* Updated width of text input
* New media uploader
* Dropped custom post types for file attachments
* Updater script to remove the unused 'optionsframework' post types
* Updated IDs for .tabs and .groups

= 1.4 =

* Add missing sanitization to typography color (@weplantmedia)
* New colorpicker (props @mattweibe for getting this in WordPress core)
* Farsi translations (@vahidd.com)
* Added password option type (props @neojp)
* Allow ids to passed to tabs (props @themeblvd)
* Added optionsframework_after_validate hook (h/t @vanpop and @pryley)

= 1.3 =

* Allow options to save when set by theme customizer
* Save checkbox options to boolean false rather than "0"
* Added optionsframework_after hook
* Normalized text domains to options_framework_theme

= 1.2 =

* ID can now be passed on info option for styling purposes

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