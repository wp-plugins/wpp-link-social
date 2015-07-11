<?php
/*
Plugin Name: Wpp Link Social
Author: Piyush Kapoor
Description: A plugin that allows to create social icons with link in the webpage of your website
Version: 1.0
Author URI: http://www.webplusplus.in/wpp-link-social
*/


/*  Copyright 2015  Piyush Kapoor  (email : Piyushkapoor786@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

http://www.gnu.org/licenses/gpl.txt

*/
define('Plugin_Name','Wpp link socal');
require_once('aiu.php') ;
require_once('plugin-menu.php') ;
require_once('plugin-process.php') ;
require_once('plugin-show.php') ;
register_activation_hook(__FILE__,'wppwls_activate');
register_deactivation_hook(__FILE__,'wppwls_deactivate');
register_uninstall_hook(__FILE__,'wppwls_uninstall');
add_action('admin_menu','wppwls_menu');
add_action('admin_post_wppwls_process','wppwls_process');
add_action('wp_head','wppwls_show_css');
add_action('wp_footer','wppwls_show_link');

?>
