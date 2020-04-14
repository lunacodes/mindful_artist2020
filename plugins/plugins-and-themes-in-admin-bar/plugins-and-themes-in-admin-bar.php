<?php
/**
 * Plugin Name: Plugins and Themes in Admin bar
 * Plugin URI: http://wp26.com/wordpress-plugins
 * Description: Adds plugin and theme menus in admin bar.
 * Author: Ravi
 * Author URI: http://wp26.com/about
 * Version: 0.1.1
 * License: GPLv2 or later
 */

/*  

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

/**
 * Add plugin and  theme menus in admin bar
 */
function ptab_admin_bar_render()
{
        if(current_user_can('administrator'))
	{
        global $wp_admin_bar;
	$wp_admin_bar->add_menu( array( 'id' => 'plugins_menu', 'title' => __( 'Plugins'), 'href' => admin_url( 'plugins.php') ) );
        $wp_admin_bar->add_menu( array( 'id' => 'themes_menu', 'title' => __( 'Themes'), 'href' => admin_url( 'themes.php') ) );
        $wp_admin_bar->add_menu( array(
		'parent' => 'plugins_menu',
		'id' => 'new_plugin_upload',
		'title' => __('Upload'),
		'href' => admin_url( 'plugin-install.php?tab=upload'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'plugins_menu',
		'id' => 'new_plugin_search',
		'title' => __('Search'),
		'href' => admin_url( 'plugin-install.php'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'themes_menu',
		'id' => 'new_theme_upload',
		'title' => __('Upload'),
		'href' => admin_url( 'theme-install.php?tab=upload'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'themes_menu',
		'id' => 'new_theme_search',
		'title' => __('Search'),
		'href' => admin_url( 'theme-install.php'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'plugins_menu',
		'id' => 'plugins',
		'title' => __('Installed'),
		'href' => admin_url( 'plugins.php'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'plugins_menu',
		'id' => 'plugin_editor',
		'title' => __('Editor'),
		'href' => admin_url( 'plugin-editor.php'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'themes_menu',
		'id' => 'themes',
		'title' => __('Installed'),
		'href' => admin_url( 'themes.php'),
		'meta' => false
	));
        $wp_admin_bar->add_menu( array(
		'parent' => 'themes_menu',
		'id' => 'theme_editor',
		'title' => __('Editor'),
		'href' => admin_url( 'theme-editor.php'),
		'meta' => false
	));
        }
}
add_action( 'wp_before_admin_bar_render', 'ptab_admin_bar_render' );
?>
