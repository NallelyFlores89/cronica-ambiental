<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package minimagazine
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<?php $upload_dir = wp_upload_dir(); ?>
<body <?php body_class(); ?>>
	<div class="container">
		<div class="banner_header">
			<img src="<?php echo $upload_dir['baseurl'];?>/2015/07/banner_header-e1437451436753.png" 
		</div>
		<div id="main-nav">
			<div class="brand five columns">
				
				<?php
				if(get_theme_mod('codeinwp_logo')):
					echo '<a href="'.esc_url( home_url( '/' ) ).'">';
					if(get_theme_mod('codeinwp_logo_text')):
						echo '<img src="'.get_theme_mod('codeinwp_logo').'" alt="'.get_theme_mod('codeinwp_logo_text').'">';
					else:
						echo '<img src="'.get_theme_mod('codeinwp_logo').'" alt="'.get_bloginfo('name').'">';
					endif;
					echo '</a>';
				else:
					echo '<div class="main-title">';
						
						echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';
						echo '<h2 class="site-description"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'description', 'display' ) ).'" rel="home">'.get_bloginfo( 'description' ).'</a></h2>';
					echo '</div>';
				endif;
                	
				?>
				
			</div>

<?php 
$blogtime = current_time( 'mysql' ); 
list( $today_year, $today_month, $today_day) = split( '([^0-9])', $blogtime );
switch ($today_month) {
	case '01':
		$month = "ene";
		break;
	case '02':
		$month = "feb";
		break;
	case '03':
		$month = "mar";
		break;
	case '04':
		$month = "abr";
		break;
	case '05':
		$month = "may";
		break;
	case '06':
		$month = "jun";
		break;
	case '07':
		$month = "jul";
		break;
	case '08':
		$month = "ago";
		break;
	case '09':
		$month = "sep";
		break;
	case '10':
		$month = "oct";
		break;
	case '11':
		$month = "nov";
		break;																			
	case '12':
		$month = "dic";
		break;		
	default:
		break;
}
?>


			<nav class="custom-topmenu">
				<h1 class="dateTopMenu">
					<span><?php echo $today_day?>.</span>
					<span><?php echo $month?>.</span>
					<span class="pink_year"><?php echo $today_year?></span>
				</h1>
				<ul>
					<li><a href="<?php  echo get_site_url();?>/revista"><img src="<?php  echo get_site_url();?>/wp-content/themes/minimagazine/images/revista.png"></a></li>
					<li><a href="<?php  echo get_site_url();?>/agenda"><img src="<?php  echo get_site_url();?>/wp-content/themes/minimagazine/images/agenda.png"></a></li>
					<li><a href="<?php  echo get_site_url();?>/fotos_y_videos"><img src="<?php  echo get_site_url();?>/wp-content/themes/minimagazine/images/fotos_videos.png"></a></li>
				</ul>
			</nav>
			<nav class="menu columns main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false)); ?>
			</nav>

		</div><!-- main-nav -->

	</div><!-- container -->