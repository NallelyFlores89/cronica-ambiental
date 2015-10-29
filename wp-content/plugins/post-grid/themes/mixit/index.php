<?php



		
		include post_grid_plugin_dir.'/grid-items/variables.php';

		

		
		$html .= '<div style="background:url('.$post_grid_bg_img.');" class="post-grid-container-main" >'; 
		
		$html .= '<div class="popup-container" ><div class="box"></div></div >';
			
		$html .= '<div class="post-grid-container post-grid-container-'.$post_id.' '.$post_grid_themes.' " >';
		
		
		
		
		$html .= '<div class="post-grid-filter" >';
		
		$html.= '<div class="filter" data-filter="all">All</div>';
		foreach($post_grid_taxonomy_category as $id)
			{
				
				$term = get_term( $id, $post_grid_taxonomy );
				$term_slug = $term->slug;
				$term_name = $term->name;
				$html .= '<div class="filter" data-filter=".'.$term_slug.'" >'.$term_name.'</div>';
			}
		
		
		 
		$html .= '</div >';	
		$html .= '<div class="post-grid-items" id="mixItUpContainer" >'; 
		

		include post_grid_plugin_dir.'/grid-items/query.php';

		if ( $wp_query->have_posts() ) :
		while ( $wp_query->have_posts() ) : $wp_query->the_post();
		
		$term_list = wp_get_post_terms(get_the_ID(), $post_grid_taxonomy, array("fields" => "all"));
		
		$term_slug_list = '';
		
		foreach($term_list as $term)
			{
				$term_slug_list .= $term->slug.' ';
			}
		
		
		//var_dump($term_slug_list);
		if(get_post_format( get_the_ID() ))
			{
				$post_formats_class = 'post-formats';
			}
		else
			{
				$post_formats_class = '';
			}
			
		$html .= '<div class="grid-single mix '.$term_slug_list.'"  style="max-width:'.$post_grid_items_width.';" >';
		foreach($post_grid_items as $key=>$items)
			{
				if(!empty($post_grid_items_display[$key]))
					{
						include post_grid_plugin_dir.'/grid-items/'.$key.'.php';
					}	
			
			}
		$html .= '</div >';	
			

			
		endwhile;
		
		
		$html .= '</div >';	
		
		
			
		if($post_grid_pagination_display == 'pagination')
			{
				$html .= '<div class="pager-list"></div >';
			
			}
		
	//include post_grid_plugin_dir.'/grid-items/pagination.php';
			
		
		

		
		wp_reset_query();
		endif;
			
		$html .= '</div>';
		$html .= '</div>';

	
		$html .= '<script>
			jQuery(document).ready(function($) {
				
					$(function(){
					
						$("#mixItUpContainer").mixItUp({
				pagination: {
					limit: 3,
				},
				selectors: {
					filter: ".filter"
				},';
				
		if(!empty($post_grid_mixitup_default_filter))
			{
			
		$html .= '
		load: {
			filter: ".'.$post_grid_mixitup_default_filter.'"
		}, ';
			
			}
				
				
				$html .= 'controls: {
					enable: true
				}
				
						});
					
					});
					
			
					
					
			});		
		</script>';	
	
		$html .= '<style type="text/css">
		
				.post-grid-container-'.$post_id.' .post-grid-items .mix{
				  display: none;
				}
	
				
				</style>
				';		
	
	
	
		$html .= '<script>
		jQuery(document).ready(function($) {
			$(document).on("mouseenter", ".post-grid-container-'.$post_id.' .grid-single", function()
				{
	
					$(this).children(".hover-items").addClass("animated '.$post_grid_hover_items_hover_effect_in.'");
	
					
					
				})
		});
		</script>';	
	
		
		$html .= '<style type="text/css">
		
				.post-grid-container-'.$post_id.' iframe {
				  height: '.$post_grid_thumb_height.' !important;						  
				}
				</style>
				';
		
		
		include post_grid_plugin_dir.'/grid-items/custom-css.php';
		
		include post_grid_plugin_dir.'/grid-items/scripts.php';
		
		
		

