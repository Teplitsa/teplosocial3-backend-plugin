<?php
/*
Plugin Name: Teplosocial Backend
Plugin URI: https://te-st.ru
Description: Teplosocial Backend
Author: Teplitsa
Author URI: https://te-st.ru/
Version: 0.1.0
Requires at least: 4.7.0
Tested up to: 5.7.3
Requires PHP: 7.4
License: GPL-3
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Contributors:	
	Teplitsa Support Team (suptestru@gmail.com)
 */

define('TPS_PLUGIN', true);

require_once(plugin_dir_path(__FILE__) . '/config.php');
require_once(plugin_dir_path(__FILE__) . '/utils.php');
require_once(plugin_dir_path(__FILE__) . '/auth.php');