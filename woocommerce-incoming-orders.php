<?php
/**
 * Plugin Name: Woocommerce Incoming Orders
 * Plugin URI: http://platzh1rsch.ch
 * Description: A brief description of the Plugin.
 * Version: 0.01
 * Author: Platzh1rsch
 * Author URI: http://platzh1rsch.ch
 * License: GPL2
 */

/*  Copyright 2014  Platzh1rsch  (email : info@platzh1rsch.ch)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die("No script kiddies please!");

/** Step 2 - add admin menu */
add_action( 'admin_menu', 'incoming_orders_menu' );

/** Step 1. - create admin menu */
function incoming_orders_menu() {
	//add_options_page( 'My Plugin Options', 'Incoming Orders', 'manage_options', 'woocommerce-incoming-orders', 'my_plugin_options' );
	add_submenu_page( 'woocommerce', 'My Custom Submenu Page', 'Incoming Orders', 'manage_options', 'woocommerce-incoming-orders', 'incoming_orders_page' ); 
}

/** Step 3. */
function  incoming_orders_page() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<h1>Incoming Orders</h1>';
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

?>