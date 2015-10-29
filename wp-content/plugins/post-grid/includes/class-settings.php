<?php

/*
* @Author 		ParaTheme
* @Folder	 	post-grid/includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access

class class_post_grid_settings{

	public function __construct(){
		
		add_action('admin_menu', array( $this, 'post_grid_menu_init' ));
		
		}


	public function post_grid_menu_license(){
		include('menu/post-grid-license.php');	
	}
	
	public function post_grid_menu_settings(){
		include('menu/post-grid-settings.php');	
	}
	
	
	
	public function post_grid_menu_init() {
		
		add_submenu_page('edit.php?post_type=post_grid', __('Settings','post_grid'), __('Settings','post_grid'), 'manage_options', 'post_grid_menu_settings', array( $this, 'post_grid_menu_settings' ));	
		
		add_submenu_page('edit.php?post_type=post_grid', __('License','post_grid'), __('License','post_grid'), 'manage_options', 'post_grid_menu_license', array( $this, 'post_grid_menu_license' ));	
		
			
	
	}



	
	
	}
	
new class_post_grid_settings();