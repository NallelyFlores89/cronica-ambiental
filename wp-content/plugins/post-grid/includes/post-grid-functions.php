<?php












function post_grid_ajax_items()
	{
		$post_id = (int)$_POST['grid_id'];
		
		$per_page = (int)$_POST['per_page'];
		$terms = (int)$_POST['terms'];				
		
		include post_grid_plugin_dir.'/grid-items/variables.php';
		
		$paged = (int)$_POST['paged'];
		if(empty($terms))
			{
				$post_grid_taxonomy = '';
			}
		$post_grid_taxonomy_category = (int)str_replace('.','',$terms);
			
		include post_grid_plugin_dir.'/grid-items/query.php';


		$html = '';
		
		if ( $wp_query->have_posts() ) :
		$i=1;
		while ( $wp_query->have_posts() ) : $wp_query->the_post();
		
		
		$term_list = wp_get_post_terms(get_the_ID(), $post_grid_taxonomy, array("fields" => "all"));
		
		$term_slug_list = '';
		
		foreach($term_list as $term)
			{
				$term_slug_list .= $term->slug.' ';
			}
		
		
		
		if(get_post_format( get_the_ID() ))
			{
				$post_formats_class = 'post-formats';
			}
		else
			{
				$post_formats_class = '';
			}
			
		if($i%2==0)
			{
				$even_odd = "even";
			}
		else
			{
				$even_odd = "odd";
			}
			
			
			
		$html .= '<div class="grid-single '.$term_slug_list.' '.$post_formats_class.' '.$even_odd.'" style="max-width:'.$post_grid_items_width.';" >';
		foreach($post_grid_items as $key=>$items)
			{
				if(!empty($post_grid_items_display[$key]))
					{
						include post_grid_plugin_dir.'/grid-items/'.$key.'.php';
					}

					
			}
		$html .= '</div >';	
		
		$i++;
		
		endwhile;
		wp_reset_query();
		
		else:
		
		$html.= '<script>
		jQuery(document).ready(function($)
			{
				$(".load-more").html("<span>No Post</span>");
				$(".load-more").attr("disabled", "disabled").off("click");
				$(".load-more span").css("cursor", "not-allowed");
				
				})
		
		
		</script>';			
		
		endif;
		
		include post_grid_plugin_dir.'/grid-items/scripts.php';
		echo $html;
		
		
		die();
		
		
	}
add_action('wp_ajax_post_grid_ajax_items', 'post_grid_ajax_items');
add_action('wp_ajax_nopriv_post_grid_ajax_items', 'post_grid_ajax_items');





function post_grid_get_blockquote() {
	
    $content = get_the_content();
    $content = apply_filters( 'the_content', $content );	
	preg_match('~<blockquote>([^{]*)</blockquote>~i', $content, $match);
	return $match[1];
	
}




function post_grid_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    $link =  ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	
	return '<a href="'.$link.'">'.$link.'</a>';
	
}

function post_grid_first_embed_media($post_id ) {


    $post = get_post($post_id);
    $content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
    $embeds = get_media_embedded_in_content( $content );

    if( !empty($embeds) ) {
        //return first embed
        return $embeds[0];

    } else {
        //No embeds found
        return false;
    }

}





function post_grid_get_all_product_ids($postid)
	{
		
		$post_grid_product_ids = get_post_meta( $postid, 'post_grid_product_ids', true );
		
		
		
		$return_string = '';
		$return_string .= '<ul style="margin: 0;">';
		
		
		
		$args_product = array(
		'post_type' => 'product',
		'posts_per_page' => -1,
		);

		$product_query = new WP_Query( $args_product );
	
		if($product_query->have_posts()): while($product_query->have_posts()): $product_query->the_post();
		

	   $return_string .= '<li><label ><input class="post_grid_product_ids" type="checkbox" name="post_grid_product_ids['.get_the_ID().']" value ="'.get_the_ID().'" ';
		
		if ( isset( $post_grid_product_ids[get_the_ID()] ) )
			{
			$return_string .= "checked";
			}
		
		
		
		
		$return_string .= '/>';

		$return_string .= get_the_title().'</label ></li>';
			
		endwhile;   endif; wp_reset_query();
		
		
		$return_string .= '</ul>';
		echo $return_string;
	
	}






function post_grid_get_taxonomy_category($postid)
	{
		

	
	$post_grid_taxonomy = get_post_meta( $postid, 'post_grid_taxonomy', true );
	if(empty($post_grid_taxonomy))
		{
			$post_grid_taxonomy= "";
		}
	$post_grid_taxonomy_category = get_post_meta( $postid, 'post_grid_taxonomy_category', true );
	
		
		if(empty($post_grid_taxonomy_category))
			{
			 	$post_grid_taxonomy_category =array('none'); // an empty array when no category element selected
				
			
			}

		
		
		if(!isset($_POST['taxonomy']))
			{
			$taxonomy =$post_grid_taxonomy;
			}
		else
			{
			$taxonomy = $_POST['taxonomy'];
			}
		
		
		$args=array(
		  'orderby' => 'name',
		  'order' => 'ASC',
		  'taxonomy' => $taxonomy,
		  );
	
	$categories = get_categories($args);
	
	
	if(empty($categories))
		{
		echo "No Items Found!";
		}
	
	
		$return_string = '';
		$return_string .= '<ul style="margin: 0;">';
	
	foreach($categories as $category){
		
		if(array_search($category->cat_ID, $post_grid_taxonomy_category))
		{
	   $return_string .= '<li class='.$category->cat_ID.'><label ><input class="post_grid_taxonomy_category" checked type="checkbox" name="post_grid_taxonomy_category['.$category->cat_ID.']" value ="'.$category->cat_ID.'" />'.$category->cat_name.'</label ></li>';
		}
		
		else
			{
				   $return_string .= '<li class='.$category->cat_ID.'><label ><input class="post_grid_taxonomy_category" type="checkbox" name="post_grid_taxonomy_category['.$category->cat_ID.']" value ="'.$category->cat_ID.'" />'.$category->cat_name.'</label ></li>';			
			}
		
		

		
		}
	
		$return_string .= '</ul>';
		
		echo $return_string;
	
	if(isset($_POST['taxonomy']))
		{
			die();
		}
	
		
	}

add_action('wp_ajax_post_grid_get_taxonomy_category', 'post_grid_get_taxonomy_category');
add_action('wp_ajax_nopriv_post_grid_get_taxonomy_category', 'post_grid_get_taxonomy_category');


















// solve error replace #038; by &

function post_grid_fix_pagination($link) {
	
	return str_replace('#038;', '&', $link);
	
	}
add_filter('paginate_links', 'post_grid_fix_pagination');



































function post_grid_dark_color($input_color)
	{
		if(empty($input_color))
			{
				return "";
			}
		else
			{
				$input = $input_color;
			  
				$col = Array(
					hexdec(substr($input,1,2)),
					hexdec(substr($input,3,2)),
					hexdec(substr($input,5,2))
				);
				$darker = Array(
					$col[0]/2,
					$col[1]/2,
					$col[2]/2
				);
		
				return "#".sprintf("%02X%02X%02X", $darker[0], $darker[1], $darker[2]);
			}

		
		
	}
	
	
	
	
	
	function post_grid_share_plugin()
		{
			
			?>
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwordpress.org%2Fplugins%2Fwoocommerce-products-slider%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=652982311485932" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
            
            <br />
            <!-- Place this tag in your head or just before your close body tag. -->
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            
            <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300" data-href="<?php echo post_grid_share_url; ?>"></div>
            
            <br />
            <br />
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo post_grid_share_url; ?>" data-text="<?php echo post_grid_plugin_name; ?>" data-via="ParaTheme" data-hashtags="WordPress">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



            <?php
			
			
			
		
		
		}
	
	
	
	
	function post_grid_admin_notices()
		{
			$post_grid_license_key = get_option('post_grid_license_key');
			
			$html= '';
			
			
			
			if(empty($post_grid_license_key))
				{
					$admin_url = get_admin_url();
					
					$html.= '<div class="update-nag">';
					$html.= 'Please activate your license for <b>'.post_grid_plugin_name.' &raquo; <a href="'.$admin_url.'edit.php?post_type=post_grid&page=post_grid_menu_license">License</a></b>';
					$html.= '</div>';	
				}
			else
				{

				}
			
			
			
			
			
			
								
			
			
			echo $html;
		}
	
	add_action('admin_notices', 'post_grid_admin_notices');
		