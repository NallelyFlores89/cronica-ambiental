<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package minimagazine
 */
	
?>
	<footer>
		<section id="footerContent" class="container">
			<div class="footerLogo three columns">
<!-- 				<?php			
					if(get_theme_mod('codeinwp_footerlogo')):
						if(get_theme_mod('codeinwp_footerlogo_text')):
							echo '<img src="'.get_theme_mod('codeinwp_footerlogo').'" alt="'.get_theme_mod('codeinwp_footerlogo_text').'">';		
						else:
							echo '<img src="'.get_theme_mod('codeinwp_footerlogo').'" alt="'.get_bloginfo('name').'">';
						endif;
					endif;
			
				?> -->
			</div><!-- end footerLogo -->

			<div class="footerMetaData eleven columns">
				<?php			
					if(get_theme_mod('codeinwp_footerlogo')):
						if(get_theme_mod('codeinwp_footerlogo_text')):
							echo '<img style="float:left" width="200px" src="'.get_theme_mod('codeinwp_footerlogo').'" alt="'.get_theme_mod('codeinwp_footerlogo_text').'">';		
						else:
							echo '<img style="float:left" width="200px" src="'.get_theme_mod('codeinwp_footerlogo').'" alt="'.get_bloginfo('name').'">';
						endif;
					endif;
			
				?>

				<div class="footerMenu" style="width:100%; display:block; float:left; font-weight:bold; text-align:left; margin-top:40px;">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container' => false, 'depth' => 1)); ?>
				</div><!-- end .footerMenu -->
				<div class="footerSocialIcons" style="width:100%; display:block; float:left; font-weight:bold; text-align:left; margin-top:20px;">
					<ul id="" class="menu">
						<li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom social-icon facebook menu-item-32"><a href="http://facebook.com"><i style="color:#000; letter-spacing:30px;" class="icon-2x icon-facebook "></i><span class="fa-hidden">Facebook</span></a></li>
						<li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom social-icon twitter menu-item-33"><a href="http://twitter.com"><i style="color:#000; letter-spacing:30px;" class="icon-2x icon-twitter "></i><span class="fa-hidden">Twitter</span></a></li>
						<li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom social-icon google-plus menu-item-34"><a href="http://plus.google.com"><i style="color:#000; letter-spacing:30px;" class="icon-2x icon-google-plus "></i><span class="fa-hidden">Google+</span></a></li>
					</ul>
<!-- 					<ul>
						<?php 
						if(get_theme_mod('codeinwp_fb')):
							echo "<li><a href='".get_theme_mod('codeinwp_fb')."' ><i class='icon-facebook-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_tw')):
							echo "<li><a href='".get_theme_mod('codeinwp_tw')."' ><i class='icon-twitter-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_rss')):
							echo "<li><a href='".get_theme_mod('codeinwp_rss')."' ><i class='icon-rss-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_linkedin')):
							echo "<li><a href='".get_theme_mod('codeinwp_linkedin')."' ><i class='icon-linkedin-sign'></i></a></li>";	
						endif;
						
						if(get_theme_mod('codeinwp_pinterest')):
							echo "<li><a href='".get_theme_mod('codeinwp_pinterest')."' ><i class='icon-pinterest-sign'></i></a></li>";	
						endif;
						
						?>
					</ul> -->
				</div><!-- footerSocialIcons -->

				<?php	
				/*	if(get_theme_mod('codeinwp_copyright')):
						echo '<span class="copyright">'.get_theme_mod('codeinwp_copyright').'</span>';	
					else:
						echo '<span class="copyright"> &copy; '.date('Y').' Minimagazine</span>';
					endif;*/
				?>			
				<div class="copyright" style="width:100%; float:left; display:block; text-align:left; margin-top:20px; line-height:15px;">
					<hr>			
				 	Copyright 2015 | Todos los derechos reservados.<br>
				 	Prohibida la reproducción total o parcial sin previa autorización.
				</div>	
			</div><!-- end .footerMetaData -->


		</section><!-- end .container #footerContent -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>