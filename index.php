<?php
/*
Plugin Name: France Interactive Map
Plugin URI: http://wakonda.guru
Description: France Interactive Map
Version: 1.0
Author: Wakonda
Author URI: https://wakonda.guru
Short Name: france_map
*/

function france_map() {
	require 'map_fr.php';
}
	
function map_fr_help() {
	osc_admin_render_plugin(osc_plugin_path(dirname(__FILE__)) . '/help.php') ;
}
	
// This is needed in order to be able to activate the plugin
osc_register_plugin(osc_plugin_path(__FILE__), '');
// This is a hack to show a Uninstall link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(osc_plugin_path(__FILE__) . "_uninstall", '');
// This is a hack to show a Configure link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(osc_plugin_path(__FILE__) . '_configure', 'map_fr_help');