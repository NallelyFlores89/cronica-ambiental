<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package minimagazine
 */

 $codeinwp_fb = get_theme_mod('codeinwp_fb');
 $codeinwp_tw = get_theme_mod('codeinwp_tw');
 $codeinwp_rss = get_theme_mod('codeinwp_rss');
 
 if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<?php $upload_dir = wp_upload_dir(); ?>

	<aside id="sidebar" class="five columns">
<!-- 		<div id="newsletter_form">
			<img width="150px" src="<?php echo $upload_dir['baseurl'];?>/2015/07/newsletter.png"><br><br>
			<form class="sola_nl_sub_form">
		        <div class="sola_sign_up_form_row">
		            <label>Nombre:</label>
		            <input type="text" name="sub_name"  class="newsletter_input_style_sidebar">
		        </div>
		        <div class="sola_sign_up_form_row">
		            <label>Correo electrónico:</label>
		            <input type="email" name="sub_email" class="newsletter_input_style_sidebar">
		        </div><br><br>
		        <div style="display:none">
		            <input name="action" value="sola_nl_sign_up_add_sub" type="hidden">
		            <input name="security" value="29c9b597ce" type="hidden"></div><div>
		            <input id="sendNewsletterFormSidebar" type="submit" value="Enviar">
		        </div>		        
			</form>
		</div> -->

		<!-- <div class="pinkLine"></div> -->
		<div class="socialIcons">
				<?php 	
						
						if(!empty($codeinwp_fb))		
							echo "<a title='Like us!' href='".$codeinwp_fb."' class='soc-icon soc-icon-facebook'><i class='icon-facebook'></i></a>";	
							
						if(!empty($codeinwp_tw))		
							echo "<a title='Follow us!' href='".$codeinwp_tw."' class='soc-icon soc-icon-twitter'><i class='icon-twitter'></i></a>";	
						
						if(!empty($codeinwp_rss))		
							echo "<a title='Subscribe!' href='".$codeinwp_rss."' class='soc-icon soc-icon-rss'><i class='icon-rss'></i></a>";							
				?>	
		</div><!-- end .socialIcons -->

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<div id="suscriber_sidebar">
			<img src="<?php echo $upload_dir['baseurl'];?>/2015/07/banner_sidebar.png">
		</div>				
	</aside>
<?php else: ?>
	<!-- default sidebar -->
		<aside id="sidebar" class="five columns">

 			<div class="searchBar">
				<?php get_search_form(); ?>
			</div> <!-- end .searchBar -->

		</aside><!-- end #sidebar -->
<?php endif; ?>