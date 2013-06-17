<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="http://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    
		
		<script>
			jQuery(".animateit").click(function(){
				alert('hi');
				$(".animateme").animate( { width: "200%" }, { queue: false, duration: 3000 })
.animate({ fontSize: "24px" }, 1500 )
.animate({ borderRightWidth: "15px" }, 1500 );
				});
    jQuery.noConflict();
    </script>
 <link href="<?php bloginfo('template_url'); ?>/static/css/menu.css" type="text/css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/static/css/style1.css" type="text/css" rel="stylesheet" />
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" media="screen" type="text/css" />
<!--
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
-->

  
    <script src="<?php bloginfo('template_url'); ?>/static/js/menu.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/disable_right_click.js" type="text/javascript"></script>
    
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php// _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php// esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php// _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php// wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		<div id="menu">
      <ul class="tabs">
        <li class="hasmore"><a class="top-menu" href="#"><span>Dance Bands</span></a>
        <ul class="dropdown">
          <li><a href="../las_vegas_show_bands/las_vegas_show_bands.html">Las Vegas Show Bands</a></li>
          <li><a href="../cover_bands/cover_bands.html">Cover Bands</a></li>
          <li><a href="../wedding_bands/wedding_dance_bands.html">Wedding Dance Bands</a></li>
          <li><a href="../new_years_eve_bands/new_years_eve_bands.html">New Year's Bands</a></li>
          <li><a href="../big_bands/big_bands.html">Big Bands</a></li>
          <li><a href="../small_swing_bands/small_swing_bands.html">Small Swing Bands</a></li>
          <li class="last"><a href="../latin_ethnic_bands/latin_ethnic_bands.html">Latin &amp; Salsa Bands</a></li>
        </ul>
        </li>
        <li class="hasmore"><a class="top-menu" href="#"><span>Variety Acts</span></a>
        <ul class="dropdown">
          <li><a href="../variety_acts/variety_acts.html">Variety Acts</a></li>
          <li class="last"><a href="../keynote_speakers/keynote_speakers.html">Motivational Speakers</a></li>
        </ul>
        </li>
        <li class="hasmore"><a class="top-menu" href="#"><span>Headliners</span></a>
        <ul class="dropdown">
          <li><a href="../celebrity_headliners/celebrity_headliners.html">Celebrities &amp; Headliner Bands</a></li>
          <li><a href="../performer_pages/rick_faugno.html">Rick Faugno</a></li>
        </ul>
        </li>
        <li class="hasmore"><a class="top-menu" href="#"><span>Jazz</span></a>
        <ul class="dropdown">
          <li><a href="../jazz_trios_quartets/jazz_trios_quartets.html">Jazz</a></li>
          <li class="last"><a href="../cabaret_vocalists/cabaret_vocalists.html">Cabaret Vocalists &amp Pianists</a></li>
        </ul>
        </li>
        <li><a class="top-menu" href="../classical/classical.html"><span>Classical</span></a></li>
        <li class="hasmore"><a class="top-menu" href="#"><span>Contact</span></a>
        <ul class="dropdown">
          <li><a href="../info/contact.html">Contact</a></li>
          <li><a href="../info/client_comments.html">Comments</a></li>
          <li><a href="../info/questions.html">FAQ</a></li>
          <li><a href="../info/photos.html">Photos</a></li>
          <li class="last"><a href="../info/links.html">Links</a></li>
        </ul>
        </li>
        <li><a class="top-menu" href="/blog/"><span>Blog</span></a></li>
      </ul>
    </div>


 <div id="logo"><a href="../index.html"><img src="<?php bloginfo('template_url'); ?>/static/img/template/dle.png" alt="David Levin Entertainment Logo" /></a></div>
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('#accordion').accordion({
            collapsible: true
        });	
	});
</script>
