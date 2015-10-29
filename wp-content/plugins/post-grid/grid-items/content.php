<?php
/*
* @Author: 		ParaTheme
* @Folder:		Team/Templates
* @version:		3.0.5

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


	$content = apply_filters( 'post_grid_filter_content', get_the_content() );
	$content =  apply_filters('the_content', $content);
	$content =  wp_trim_words( $content , $post_grid_excerpt_count, ' <a style="font-size:'.$post_grid_content_font_size.';color:'.$post_grid_content_color.';" class="read-more" href="'.get_the_permalink().'">'.$post_grid_read_more_text.'</a>' );
	
	$html .= '<div style="font-size:'.$post_grid_content_font_size.';color:'.$post_grid_content_color.';" class="content">';
	
	$html .= $content;	
	
	$html .= '</div >';