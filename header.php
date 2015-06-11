<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package casas & carros
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,700,600,500,300,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	

	<header id="masthead" class="site-header" role="banner">
		<div class="social-links">
			<div class="master-wrapper">
				<div class="col-sm-12">
                        
                        <!-- Top Social Icon -->
                        <div class="top-social-icon icons-hover-black">
                            
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a> 
                             <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-youtube"></i>
                            </a> 
                        </div>
                        <!-- Top Search -->
                        <div class="top-search">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
			</div>
		</div>
		<div class="master-wrapper">
			<div class="site-branding col-md-3">
				<?php if ( get_header_image() ) : ?>
		<img id="logo" src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation col-md-9" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'casas-carros' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div class="home-slider">.
		<img src="<?php echo get_template_directory_uri() . '/img/slide.png' ?>" width="100%" height="auto">
	</div>
	<div id="content" class="master-wrapper slide-container">
		
    </div>

		
