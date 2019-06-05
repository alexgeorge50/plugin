<?php
/*
Plugin Name: YoutubeSubs
Plugin URI: https://foodiealex.cloudaccess.host/
Description: Youtube Subscribes
Version: 1.0.0
Author: Alex
Author URI: https://foodiealex.cloudaccess.host/

*/
//Exit when accessed directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register Widget
function register_youtubesubs(){
  register_widget('Youtube_Subs_Widget');
}
// Hook in function
add_action('widgets_init', 'register_youtubesubs');