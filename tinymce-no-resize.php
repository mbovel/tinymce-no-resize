<?php
/*
Plugin Name: TinyMCE No Resize
Description: This plugin allows you to turn off the resizing handles on images, tables or media objects in the TinyMCE editor.
Author: Matthieu Bovel
Author URI: http://matthieu.bovel.net
Network: true
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.txt
Version: 0.1
*/

add_filter('tiny_mce_before_init', function($init) {
	// TinyMCE - object_resizing
	// http://www.tinymce.com/wiki.php/Configuration:object_resizing
	$init['object_resizing'] = false;
	return $init;
});