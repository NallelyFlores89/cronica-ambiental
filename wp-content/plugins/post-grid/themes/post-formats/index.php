<?php


function post_grid_themes_post_formats($post_id)
	{
		
		/*
		
		
		$post_grid_meta_options = get_post_meta( $post_id, 'post_grid_meta_options', true );;		
		
		$post_grid_meta_options['themes'] = '';
		$post_grid_meta_options['masonry_enable'] = '';	
		$post_grid_meta_options['bg_img'] = '';		
		$post_grid_meta_options['thumb_size'] = '';
		$post_grid_meta_options['empty_thumb_src'] = '';		
		$post_grid_meta_options['post_per_page'] = '';
		$post_grid_meta_options['pagination_display'] = '';		
		$post_grid_meta_options['excerpt_count'] = '';	
		$post_grid_meta_options['read_more_text'] = '';
		
		$post_grid_meta_options['items_width'] = '';				
		$post_grid_meta_options['items_width_mobile'] = '';	
		
		$post_grid_meta_options['query_order'] = '';			
		$post_grid_meta_options['query_orderby'] = '';		
		$post_grid_meta_options['posttype'] = '';			
		$post_grid_meta_options['taxonomy'] = '';		
		$post_grid_meta_options['taxonomy_category'] = '';		
		
		$post_grid_meta_options['meta_author_display'] = '';
		$post_grid_meta_options['meta_date_display'] = '';		
		$post_grid_meta_options['meta_categories_display'] = '';		
		$post_grid_meta_options['meta_tags_display'] = '';		
		$post_grid_meta_options['meta_comments_display'] = '';		
		
		$post_grid_meta_options['grid_items'] = '';		
		$post_grid_meta_options['grid_items_wrapper'] = '';						
		$post_grid_meta_options['grid_items_display'] = '';	
		
		$post_grid_meta_options['post_title_linked'] = '';			
		$post_grid_meta_options['post_thumbnail_linked'] = '';		
		
		$post_grid_meta_options['hover_items_zoom_display'] = '';		
		$post_grid_meta_options['hover_items_link_display'] = '';		
		$post_grid_meta_options['hover_items_share_display'] = '';	
														
		*/
		
		$post_grid_themes = get_post_meta( $post_id, 'post_grid_themes', true );
		$post_grid_masonry_enable = get_post_meta( $post_id, 'post_grid_masonry_enable', true );		
		
		$post_grid_bg_img = get_post_meta( $post_id, 'post_grid_bg_img', true );		
		$post_grid_thumb_size = get_post_meta( $post_id, 'post_grid_thumb_size', true );
		$post_grid_empty_thumb = get_post_meta( $post_id, 'post_grid_empty_thumb', true );		
			
		$post_grid_post_per_page = get_post_meta( $post_id, 'post_grid_post_per_page', true );		
		$post_grid_pagination_display = get_post_meta( $post_id, 'post_grid_pagination_display', true );		

		$post_grid_excerpt_count = get_post_meta( $post_id, 'post_grid_excerpt_count', true );		
		$post_grid_read_more_text = get_post_meta( $post_id, 'post_grid_read_more_text', true );					
		
		$post_grid_bg_img = get_post_meta( $post_id, 'post_grid_bg_img', true );
		
		$post_grid_items_width = get_post_meta( $post_id, 'post_grid_items_width', true );
		$post_grid_items_width_mobile = get_post_meta( $post_id, 'post_grid_items_width_mobile', true );				
		$post_grid_thumb_height = get_post_meta( $post_id, 'post_grid_thumb_height', true );	

		$post_grid_query_order = get_post_meta( $post_id, 'post_grid_query_order', true );
		$post_grid_query_orderby = get_post_meta( $post_id, 'post_grid_query_orderby', true );		
		$post_grid_posttype = get_post_meta( $post_id, 'post_grid_posttype', true );
		$post_grid_taxonomy = get_post_meta( $post_id, 'post_grid_taxonomy', true );
		$post_grid_taxonomy_category = get_post_meta( $post_id, 'post_grid_taxonomy_category', true );				
		
		$post_grid_meta_author_display = get_post_meta( $post_id, 'post_grid_meta_author_display', true );
		$post_grid_meta_avatar_display = get_post_meta( $post_id, 'post_grid_meta_avatar_display', true );			
		$post_grid_meta_date_display = get_post_meta( $post_id, 'post_grid_meta_date_display', true );				
		$post_grid_meta_categories_display = get_post_meta( $post_id, 'post_grid_meta_categories_display', true );
		$post_grid_meta_tags_display = get_post_meta( $post_id, 'post_grid_meta_tags_display', true );		
		$post_grid_meta_comments_display = get_post_meta( $post_id, 'post_grid_meta_comments_display', true );		
		
		$post_grid_items = get_post_meta( $post_id, 'post_grid_items', true );		
		$post_grid_wrapper = get_post_meta( $post_id, 'post_grid_wrapper', true );
		$post_grid_before_after = get_post_meta( $post_id, 'post_grid_before_after', true );			
		$post_grid_items_display = get_post_meta( $post_id, 'post_grid_items_display', true );		
		
		$post_grid_post_title_linked = get_post_meta( $post_id, 'post_grid_post_title_linked', true );		
		$post_grid_post_thumbnail_linked = get_post_meta( $post_id, 'post_grid_post_thumbnail_linked', true );			
		$post_grid_post_thumbnail_external = get_post_meta( $post_id, 'post_grid_post_thumbnail_external', true );
		
		$post_grid_hover_items_zoom_display = get_post_meta( $post_id, 'post_grid_hover_items_zoom_display', true );			
		$post_grid_hover_items_link_display = get_post_meta( $post_id, 'post_grid_hover_items_link_display', true );		
		$post_grid_hover_items_share_display = get_post_meta( $post_id, 'post_grid_hover_items_share_display', true );		
		
		$post_grid_title_color = get_post_meta( $post_id, 'post_grid_title_color', true );
		$post_grid_title_font_size = get_post_meta( $post_id, 'post_grid_title_font_size', true );
	
		$post_grid_content_color = get_post_meta( $post_id, 'post_grid_content_color', true );
		$post_grid_content_font_size = get_post_meta( $post_id, 'post_grid_content_font_size', true );
		
		$post_grid_hover_items_hover_effect_in = get_post_meta( $post_id, 'post_grid_hover_items_hover_effect_in', true );
		
		
		if ( wp_is_mobile() )
			{
				$post_grid_items_width = $post_grid_items_width_mobile;
			}	
		

		
		if(empty($post_grid_items))
			{
			$post_grid_items = array('post_title'=>'Title',
											'content'=>'Content',
											'thumbnail'=>'Thumbnail',
											'meta'=>'Meta',
											'social'=>'Social',
											'hover_items'=>'Hover Items',
											'woocommerce'=>'WooCommerce'
											);
			}
		
		if(empty($post_grid_items_display))
			{
			$post_grid_items_display = array('post_title'=>'on',
											'content'=>'on',
											'thumbnail'=>'on',
											'meta'=>'on',
											'social'=>'on',
											'hover_items'=>'on',
											'woocommerce'=>'on'
											);
			}		
		
		
		
		
		
		
		
		if(empty($post_grid_read_more_text))
			{
				$post_grid_read_more_text = 'Read More.';
			}
			
		if(empty($post_grid_excerpt_count))
			{
				$post_grid_excerpt_count = 30;
			}

		

		$html  = '';
		$html .= '<div style="background:url('.$post_grid_bg_img.');" class="post-grid-container-main" >';
		
		$html .= '<div class="popup-container" ><div class="box"></div></div >';
		
		
		
		$html .= '<div class="post-grid-container post-grid-container-'.$post_id.' '.$post_grid_themes.' " >'; 
		$html .= '<div class="post-grid-items" >'; 
		
		
		
		if ( get_query_var('paged') ) {
		
			$paged = get_query_var('paged');
		
		} elseif ( get_query_var('page') ) {
		
			$paged = get_query_var('page');
		
		} else {
		
			$paged = 1;
		
		}
		
		
		
		
		if(!empty($post_grid_taxonomy))
			{
				$wp_query = new WP_Query(
					array (
						'post_type' => $post_grid_posttype,
						'post_status' => 'publish',
						'tax_query' => array(
							array(
								   'taxonomy' => $post_grid_taxonomy,
								   'field' => 'id',
								   'terms' => $post_grid_taxonomy_category,
							)
						),
						
						'orderby' => $post_grid_query_orderby,
						'order' => $post_grid_query_order,
						'posts_per_page' => $post_grid_post_per_page,
						'paged' => $paged,
						) );	
			}
		else
			{
				$wp_query = new WP_Query(
					array (
						'post_type' => $post_grid_posttype,
						'post_status' => 'publish',
						'orderby' => $post_grid_query_orderby,
						'order' => $post_grid_query_order,
						'posts_per_page' => $post_grid_post_per_page,
						'paged' => $paged,
						) );
			}

		if ( $wp_query->have_posts() ) :
		
		while ( $wp_query->have_posts() ) : $wp_query->the_post();
		
		
		
		$html .= '<div class="grid-single" style="max-width:'.$post_grid_items_width.';" >';
		foreach($post_grid_items as $key=>$items)
			{
				if($key == 'post_title')
					{
						if(!empty($post_grid_items_display[$key]))
							{
								if(!empty($post_grid_wrapper[$key]['start']))
									{
										$html .=$post_grid_wrapper[$key]['start'];
									}
								else
									{
										$html .= '<div style="font-size:'.$post_grid_title_font_size.';color:'.$post_grid_title_color.';" class="title">';
									}
								
								if(!empty($post_grid_before_after[$key]['before']))
									{
										$html .= $post_grid_before_after[$key]['before'];
									}
								else
									{
										$html .= '';
									}								
								
								
								
								
								
								if($post_grid_post_title_linked == 'yes')
									{
									$html .= '<a style="font-size:'.$post_grid_title_font_size.';color:'.$post_grid_title_color.';" href="'.get_the_permalink().'">'.get_the_title().'</a>';
									}
								else
									{
										$html .= get_the_title();
									}
								
								
								if(!empty($post_grid_before_after[$key]['after']))
									{
										$html .= $post_grid_before_after[$key]['after'];
									}
								else
									{
										$html .= '';
									}
								

								if(!empty($post_grid_wrapper[$key]['end']))
									{
										$html .=$post_grid_wrapper[$key]['end'];
									}
								else
									{
										$html .= '</div >';	
									}
	
							}
						
					}
				elseif($key == 'content')
					{
						if(!empty($post_grid_items_display[$key]))
							{
							$content = get_the_content();
							$content =  apply_filters('the_content', $content);
							$content =  wp_trim_words( $content , $post_grid_excerpt_count, ' <a style="font-size:'.$post_grid_content_font_size.';color:'.$post_grid_content_color.';" class="read-more" href="'.get_the_permalink().'">'.$post_grid_read_more_text.'</a>' );
							
							if(!empty($post_grid_wrapper[$key]['start']))
								{
								
									$html .=$post_grid_wrapper[$key]['start'];
								}
							else
								{
									$html .= '<div style="font-size:'.$post_grid_content_font_size.';color:'.$post_grid_content_color.';" class="content">';
								}
								
								
							if(!empty($post_grid_before_after[$key]['before']))
								{
									$html .= $post_grid_before_after[$key]['before'];
								}
							else
								{
									$html .= '';
								}
								
								
							
								
							$html .= $content;	
							
							
							if(!empty($post_grid_before_after[$key]['after']))
								{
									$html .= $post_grid_before_after[$key]['after'];
								}
							else
								{
									$html .= '';
								}
						
							
							
							
							if(!empty($post_grid_wrapper[$key]['end']))
								{
								
									$html .=$post_grid_wrapper[$key]['end'];
								}
							else
								{
									$html .= '</div >';	
								}
													
													
							
							}

					}
					
				elseif($key == 'thumbnail')
					{
						

						
						if(!empty($post_grid_items_display[$key]))
							{
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $post_grid_thumb_size );
							$thumb_url = $thumb['0'];		
	
	
							$external_thumb = get_post_meta( get_the_ID(), $post_grid_post_thumbnail_external, true );
							if(!empty($external_thumb))
								{
									$thumb_url = $external_thumb;
								}
	
	
	
	
	
	
							if(empty($thumb_url))
								{
								$thumb_url = $post_grid_empty_thumb;
								}
	
							if(!empty($post_grid_wrapper[$key]['start']))
								{
									$html .=$post_grid_wrapper[$key]['start'];
								}
							else
								{
									$html .= '<div class="thumb" style="max-height:'.$post_grid_thumb_height.';" >';
								}
	
	
							if(!empty($post_grid_before_after[$key]['before']))
								{
									$html .= $post_grid_before_after[$key]['before'];
								}
							else
								{
									$html .= '';
								}
	
							$post_format = get_post_format( get_the_ID() );
	
							if($post_format=='video' || $post_format=='audio')
								{
									
									$html.= post_grid_first_embed_media(get_the_ID() );
								}
								
								
							elseif($post_format=='link')
								{
									$html.= '<div class="post-format-link">';
									$html.= post_grid_get_link_url();
									$html.= '</div>';
								}								
							elseif($post_format=='quote')
								{
									$html.= '<div class="post-format-quote">';
									$html.= post_grid_get_blockquote();
									$html.= '</div>';
								}								
								
							
							elseif($post_format=='gallery')
								{
									$html.= '<div class="gallery owl-carousel">';
									$gallery = get_post_gallery( get_the_ID(), false );
									
									/* Loop through all the image and output them one by one */
									foreach( $gallery['src'] as $src )
										{
											$html .= '<img src="'.$src.'" class="gallery-item" alt="Gallery image" />';
										}
									$html.= '</div>';
								}
								
								
							else
								{
									if($post_grid_post_thumbnail_linked == 'yes')
										{
											$html .= '<a href="'.get_the_permalink().'"><img post_id="'.get_the_ID().'" src="'.$thumb_url.'" /></a>';
										}
									else
										{
											$html .= '<img post_id="'.get_the_ID().'" src="'.$thumb_url.'" />';
										}	
								}
	
	
	
	
	
	

	
							if(!empty($post_grid_before_after[$key]['after']))
								{
									$html .= $post_grid_before_after[$key]['after'];
								}
							else
								{
									$html .= '';
								}
								
								
							
							if(!empty($post_grid_wrapper[$key]['end']))
								{
									$html .=$post_grid_wrapper[$key]['end'];
								}
							else
								{
									$html .= '</div >';	
								}
	
							
							}
						
	
					}
				elseif($key == 'meta')
					{
						if(!empty($post_grid_items_display[$key]))
							{
								
							if(!empty($post_grid_wrapper[$key]['start']))
								{
									$html .=$post_grid_wrapper[$key]['start'];
								}
							else
								{
									$html .= '<div class="meta">';
								}
								
							
							if(!empty($post_grid_before_after[$key]['before']))
								{
									$html .= $post_grid_before_after[$key]['before'];
								}
							else
								{
									$html .= '';
								}
							
							
							$tags = get_the_tags(get_the_ID());
							if(empty($tags))
								{
									$tags = array();
								}
							$tags_links = '';
						
							foreach ($tags  as $tag)
							{
								$tags_links .= '<a href="'.get_tag_link($tag->term_id).'" >#'.$tag->name.'</a> ';
						
							}
													
							$categories = get_the_category();
							$separator = ', ';
							$category_output = '';
							if($categories){
								foreach($categories as $category) {
									$category_output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
								}
							
							}			
			
			
			
							
							
							
							if($post_grid_meta_avatar_display == 'yes')
								{
							$html .= '<span class="avatar">'.get_avatar( get_the_author_meta( 'ID' ), 80 ).'</span>';
								}
							else
								{
							$html .= '<span class="avatar-icon"></span>';
								}
							
							
							
							if($post_grid_meta_author_display == 'yes')
							$html .= '<span class="author">'.get_the_author().'</span>';
							
							if($post_grid_meta_date_display == 'yes')		
							$html .= '<span class="date">'.get_the_date('M d Y').'</span>';	
							
							if(!empty($category_output) && $post_grid_meta_categories_display == 'yes')
							$html .= '<span class="cayegory">'.trim($category_output, $separator).'</span>';
							
							if(!empty($tags_links) && $post_grid_meta_tags_display == 'yes')
							$html .= '<span class="tags">'.$tags_links.'</span>';
							
							$total_comments = wp_count_comments( get_the_ID() );
							if($post_grid_meta_comments_display == 'yes')		
							$html .= '<span class="comments">'.$total_comments->approved.'</span>';	
							
							
							
							if(!empty($post_grid_before_after[$key]['after']))
								{
									$html .= $post_grid_before_after[$key]['after'];
								}
							else
								{
									$html .= '';
								}
							
							
							
							
							if(!empty($post_grid_wrapper[$key]['end']))
								{
									$html .=$post_grid_wrapper[$key]['end'];
								}
							else
								{
									$html .= '</div >';
								}
							
							
							
							
							
							
							
							}

	
					}
				elseif($key == 'social')
					{
						if(!empty($post_grid_items_display[$key]))
							{
								
								
							if(!empty($post_grid_wrapper[$key]['start']))
								{
									$html .=$post_grid_wrapper[$key]['start'];
								}
							else
								{
									$html .= '<div class="social-icon">';
								}


							if(!empty($post_grid_before_after[$key]['before']))
								{
									$html .= $post_grid_before_after[$key]['before'];
								}
							else
								{
									$html .= '';
								}




							
							$html .= '
								<span class="fb">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'"> </a>
								</span>
								<span class="twitter">
									<a target="_blank" href="https://twitter.com/intent/tweet?url='.get_permalink().'&text='.get_the_title().'"></a>
								</span>
								<span class="gplus">
									<a target="_blank" href="https://plus.google.com/share?url='.get_permalink().'"></a>
								</span>
							';
							
							
							if(!empty($post_grid_before_after[$key]['after']))
								{
									$html .= $post_grid_before_after[$key]['after'];
								}
							else
								{
									$html .= '';
								}
							
							
							
							
							if(!empty($post_grid_wrapper[$key]['end']))
								{
									$html .=$post_grid_wrapper[$key]['end'];
								}
							else
								{
									$html .= '</div >';	
								}
							
							
							
							
								
							}
						
					
							
					}


				if($key == 'hover_items')
					{
						
						
						$post_format = get_post_format( get_the_ID() );
						
						if($post_format == 'video' || $post_format == 'audio' || $post_format == 'link' || $post_format == 'quote')
							{
							
							}
							
						elseif($post_format=='gallery')
							{
								
							}							
							
						else
							{
						
							
							
							if(!empty($post_grid_items_display[$key]))
								{
									if(!empty($post_grid_wrapper[$key]['start']))
										{
											$html .=$post_grid_wrapper[$key]['start'];
										}
									else
										{
											$html .= '<div class="hover-items">';
										}
									
									
								if(!empty($post_grid_before_after[$key]['before']))
									{
										$html .= $post_grid_before_after[$key]['before'];
									}
								else
									{
										$html .= '';
									}
									
									
	
									
									if($post_grid_hover_items_zoom_display == 'yes')
										{
											$html .= '<a title="Zoom." class="zoom"></a>';
										}
									
									if($post_grid_hover_items_link_display == 'yes')
										{
											$html .= '<a title="Read More." href="'.get_the_permalink().'" class="post-link"></a>';
										}								
									
									if($post_grid_hover_items_share_display == 'yes')
										{
											$html .= '<div class="share-button">
											<a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'"> </a>
											<a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url='.get_permalink().'&text='.get_the_title().'"></a>
											<a class="gplus" target="_blank" href="https://plus.google.com/share?url='.get_permalink().'"></a>
													</div>
				
											';	
										}								
									
									
									
									if(!empty($post_grid_before_after[$key]['after']))
										{
											$html .= $post_grid_before_after[$key]['after'];
										}
									else
										{
											$html .= '';
										}
					
									
	
									if(!empty($post_grid_wrapper[$key]['end']))
										{
											$html .=$post_grid_wrapper[$key]['end'];
										}
									else
										{
											$html .= '</div >';	
										}
		
								}
				
							}
						
						
						
						
						
					
					}

				if($key == 'woocommerce')
					{
						
						$is_product = get_post_type( get_the_ID() );
						$active_plugins = get_option('active_plugins');
						
						if(in_array( 'woocommerce/woocommerce.php', (array) $active_plugins ) && $is_product=='product')
							{
								if(!empty($post_grid_items_display[$key]))
									{
										if(!empty($post_grid_wrapper[$key]['start']))
											{
												$html .=$post_grid_wrapper[$key]['start'];
											}
										else
											{
												$html .= '<div class="pg-woocommerce">';
											}
											
										if(!empty($post_grid_before_after[$key]['before']))
											{
												$html .= $post_grid_before_after[$key]['before'];
											}
										else
											{
												$html .= '';
											}
											
											
											
											
										global $woocommerce, $product;
										
										$price = $product->get_price_html();
										$cart = do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
										$rating = $product->get_average_rating();
										$rating = (($rating/5)*100);
										$html .= '<div class="pg-price">'.$price.'</div>';
										$html .= '<div class="pg-cart">'.$cart.'</div>';
										
										if($rating <=0 )
											{
												
											}
										else
											{
												$html .= '<div class="pg-rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="Rated '.$rating.'"><span style="width:'.$rating.'%;"></span></div></div></div>';
											}
																
		
										if(!empty($post_grid_before_after[$key]['after']))
											{
												$html .= $post_grid_before_after[$key]['after'];
											}
										else
											{
												$html .= '';
											}
				
		
		
		
		
		
										if(!empty($post_grid_wrapper[$key]['end']))
											{
												$html .=$post_grid_wrapper[$key]['end'];
											}
										else
											{
												$html .= '</div >';	
											}
			
									}
							}
						
						

						
					}
				if($key == 'meta_fields')
					{
						$post_grid_post_meta_fields = get_post_meta($post_id, 'post_grid_post_meta_fields', true );
						
						if(empty($post_grid_post_meta_fields))
							{
								$post_grid_post_meta_fields = '';
							}
						
						$post_grid_post_meta_fields = explode(',', $post_grid_post_meta_fields);
						
						if(!empty($post_grid_items_display[$key]))
							{
								if(!empty($post_grid_wrapper[$key]['start']))
									{
										$html .=$post_grid_wrapper[$key]['start'];
									}
								else
									{
										$html .= '<div class="meta-fields">';
									}
									
								if(!empty($post_grid_before_after[$key]['before']))
									{
										$html .= $post_grid_before_after[$key]['before'];
									}
								else
									{
										$html .= '';
									}
									
									
								foreach($post_grid_post_meta_fields as $meta_key)
									{
										$meta_value = get_post_meta(get_the_ID(), $meta_key, true );
										if(!empty($meta_value) && !is_array($meta_value))
											{
												$html .= '<div  class="meta-single">';
												$html .= do_shortcode($meta_value);		
												$html .= '</div >';
											}

									}
								
								
								
								if(!empty($post_grid_before_after[$key]['after']))
									{
										$html .= $post_grid_before_after[$key]['after'];
									}
								else
									{
										$html .= '';
									}



								if(!empty($post_grid_wrapper[$key]['end']))
									{
										$html .=$post_grid_wrapper[$key]['end'];
									}
								else
									{
										$html .= '</div >';	
									}
	
							}
						
					}

				else
					{
						
					}
					
			}
		$html .= '</div >';	
			
		endwhile;
		
		
		$html .= '</div >';	
		
		
				
		if($post_grid_pagination_display == 'yes')
			{
				$html .= '<div class="paginate">';
				$big = 999999999; // need an unlikely integer
				$html .= paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, $paged ),
					'total' => $wp_query->max_num_pages
					) );
			
				$html .= '</div >';	
			}					


		
		wp_reset_query();
		endif;
			
		$html .= '</div>';
		$html .= '</div>';
		
		
		
		
		if($post_grid_masonry_enable == 'yes' )
			{
				$html .= '<script>
				jQuery(document).ready(function($) {
				var container = document.querySelector(".post-grid-container-'.$post_id.' .post-grid-items");
				var msnry = new Masonry( container, {isFitWidth: true
				
				});
				});
				</script>';	
				
				
				
				$html .= '<style type="text/css">
				
						.post-grid-container-'.$post_id.' .post-grid-items {
						  margin: 0 auto !important;
						}
						</style>
						';

			}
		
				$html .= '<style type="text/css">
				
						.post-grid-container-'.$post_id.' iframe {
						  width: 100% !important;
						  height: '.$post_grid_thumb_height.' !important;						  
						}
						</style>
						';
		$html .='<script>
		jQuery(document).ready(function($)
		{
			$(".post-grid-container-'.$post_id.' .gallery").owlCarousel({
				
				items : 1, //10 items above 1000px browser width
				itemsDesktop : [1000,1], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,1], // betweem 900px and 601px
				itemsTablet: [600,1], //2 items between 600 and 0
				itemsMobile : [479,1], 
				navigationText : ["",""],
				autoPlay: true,
				stopOnHover: true,
				navigation: true,
				pagination: false,
				paginationNumbers: true,
				slideSpeed: 500,
				paginationSpeed: 1000,
				touchDrag : true,
				mouseDrag  : true,
				';
	
				
		$html .='});
		
		});';
		$html .= '</script>';
		
		
		
		
				$html .= '<script>
				jQuery(document).ready(function($) {
					$(document).on("mouseenter", ".post-grid-container-'.$post_id.' .grid-single", function()
						{
			
							$(this).children(".hover-items").addClass("animated '.$post_grid_hover_items_hover_effect_in.'");
			
							
							
						})
				});
				</script>';	
		
		
		
		
		
		
		
		return $html;
	}