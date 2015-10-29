<?php
/*
* @Author: 		ParaTheme
* @Folder:		Team/Templates
* @version:		3.0.5

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


	$html_title = apply_filters( 'post_grid_filter_title', get_the_title() );	

	$html .= '<div style="font-size:'.$post_grid_title_font_size.';color:'.$post_grid_title_color.';" class="title">';
	if($post_grid_post_title_linked == 'yes')
		{
		$html .= '<a style="font-size:'.$post_grid_title_font_size.';color:'.$post_grid_title_color.';" href="'.get_the_permalink().'">'.$html_title.'</a>';
		}
	else
		{
			$html .= $html_title;
		}
		
	$html .= '</div >';	
