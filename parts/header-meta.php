<?php
/**
 * The template for Header Meta
 *
 * Contains OpenGraph, DublinCore and Google Information
 * Requires Advanced Custom Fields Pro Plugin
 *
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) :
?>

  <?php if ( get_field('adresse', 'option') ) { // Get Values from Map 
      $adresse = get_field('adresse', 'option');
      $string = $adresse['address']; // get Address String 
      $str = explode(", ", $string); // explode String after comma
  } ?>
  
  <!-- Open Graph -->
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:latitude" content="<?php echo $adresse['lat']; ?>" />
  <meta property="og:longitude" content="<?php echo $adresse['lng']; ?>">
  <meta property="og:street-address" content="<?php echo $str[0]; ?>">
  <meta property="og:region" content="<?php echo $str[1]; ?>">
  <meta property="og:country-name" content="<?php echo $str[2]; ?>">
  <meta property="og:email" content="<?php echo get_field('primary_email', 'option'); ?>">
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
  <meta property="og:description" content="<?php echo get_field('seitenbeschreibung', 'option'); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/isc-logo-large.png" />
  
  <!-- Dublin Core -->
  <meta name="dcterms.title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
  <meta name="dcterms.identifier" content="<?php the_permalink(); ?>" />
  <meta name="dcterms.language" content="de" />
  <meta name="dcterms.format" content="text/html" />
  <meta name="dcterms.creator" content="GLUNZ GmbH Web & Design" />
  
  <!-- Google -->
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="<?php echo get_field('keywords', 'option'); ?>">
  <meta name="author" content="GLUNZ GmbH Web & Design">
  <meta name="geo.region" content="CH-ZG">
  <link rel="canonical" href="<?php the_permalink(); ?>" />

<?php endif; ?>