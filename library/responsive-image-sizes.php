<?php

// Add Image Sizes --> Customize or add your own
add_image_size( 'size-s', 640, 640, false );
add_image_size( 'size-m', 1024, 1024, false );
add_image_size( 'size-l', 1440, 1440, false );
add_image_size( 'size-xl', 1920, 1920, false );
add_image_size( 'size-xxl', 2880, 2880, false );


// Use Foundation Interchange to replace Images by Screen Resolution
function responsive_image($fieldID) {
  $id = get_field($fieldID); // get Image ID of custom field
  
  // get array of each image size. [0] echoes the URL
  $image_s    = wp_get_attachment_image_src( $id, 'size-s' ); 
  $image_m    = wp_get_attachment_image_src( $id, 'size-m' ); 
  $image_l    = wp_get_attachment_image_src( $id, 'size-l' );
  $image_xl   = wp_get_attachment_image_src( $id, 'size-xl' );
  $image_xxl  = wp_get_attachment_image_src( $id, 'size-xxl' );

  // output the data
  echo 'data-interchange="[' 
  . $image_s[0] . ', (small)], ['            // 0-640
  . $image_m[0] . ', (medium)], ['           // 640-1024
  . $image_xl[0] . ', (medium_ret)], ['      // 640-1024 @2x
  . $image_l[0] . ', (large)], ['            // 1024-1440
  . $image_xxl[0] . ', (large_ret)], ['      // 1024-1440 @2x
  . $image_xl[0] . ', (xlarge)], ['          // 1440-1920
  . $image_xxl[0] . ', ($xlarge_ret)],'      // 1440-1920 @2x
  . $image_xxl[0] . ', (xxlarge)]';          // 1920-2880

}


?>