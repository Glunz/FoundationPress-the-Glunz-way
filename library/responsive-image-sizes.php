<?php
/**
 * Generate responsive Images for Interchange
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

// Init the resolutions for fullscreen images
add_image_size('fullscreen-small', 640, 640);
add_image_size('fullscreen-medium', 1024, 1024);
add_image_size('fullscreen-medium-retina', 2048, 2048);
add_image_size('fullscreen-large', 1440, 1440);
add_image_size('fullscreen-large-retina', 2880, 2880);

// responsive background images
function responsive_fullscreen_background_image($fieldname) {
  $id = $fieldname;
  $img_small = wp_get_attachment_image_src( $id, 'fullscreen-small' );

  $img_medium = wp_get_attachment_image_src( $id, 'fullscreen-medium' );
  $img_medium_ret = wp_get_attachment_image_src( $id, 'fullscreen-medium-retina' );

  $img_large = wp_get_attachment_image_src( $id, 'fullscreen-large' );
  $img_large_ret = wp_get_attachment_image_src( $id, 'fullscreen-large-retina' );

  $img_xlarge = wp_get_attachment_image_src( $id, 'fullscreen-medium-retina' );
  $img_xlarge_ret = wp_get_attachment_image_src( $id, 'fullscreen-large-retina' );

  echo 'data-interchange="[';
  echo $img_small[0];
  echo ', (small)], [';
  echo $img_medium[0];
  echo ', (medium)], [';
  echo $img_medium_ret[0];
  echo ', (medium_ret)], [';
  echo $img_large[0];
  echo ', (large)], [';
  echo $img_large_ret[0];
  echo ', (large_ret)], [';
  echo $img_xlarge[0];
  echo ', (xlarge)], [';
  echo $img_xlarge_ret[0];
  echo ', (xlarge_ret)]"';
}

?>