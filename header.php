<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Favicon & Touch Icon -->
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		
		<!-- Open Graph -->
		<meta property="og:site_name" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" />
		<meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" />
		<meta property="og:title" content="<?php echo get_the_title(); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:latitude" content="46.950304" />
		<meta property="og:longitude" content="7.458627" />
		<meta property="og:street-address" content="Altenbergstrasse 8" />
		<meta property="og:locality" content="Bern" />
		<meta property="og:region" content="Bern" />
		<meta property="og:postal-code" content="3013" />
		<meta property="og:country-name" content="Switzerland" />
		<meta property="og:email" content="info@glunz.ch" />
		<meta property="og:phone_number" content="+41797945469" />
		<meta property="og:description" content="Agentur für Webdesign, Printdesign und Corporate Design (CI/CD)" />

		<!-- Map Data -->
		<meta name="ICBM" content="46.950304,7.458627" />
		<meta name="geo.position" content="46.950304;7.458627" />
		<meta name="geo.region" content="CH-BE" />
		<meta name="geo.placename" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" />

		<!-- Dublin Core -->
		<meta name="dcterms.title" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" />
		<meta name="dcterms.identifier" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" />
		<meta name="dcterms.language" content="de" />
		<meta name="dcterms.format" content="text/html" />
		<meta name="dcterms.creator" content="Dino Meyer, Stirling Tschan, Pino Guentensperger" />
		
		<script type="text/javascript">var templateUrl = "<?= get_bloginfo('template_url'); ?>";</script>

		<!-- wp_head -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php include_once("assets/images/sprite/sprite.svg"); ?>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<?php
		if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
		get_template_part( 'parts/off-canvas-menu' );
		endif;
	?>

	<?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
