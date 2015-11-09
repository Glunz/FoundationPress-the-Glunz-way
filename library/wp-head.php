<?php
/**
 * Add things to wp_head
 *
 */

function add_header_stuff() {

  echo '<meta charset="utf-8" />';

  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';

//  include( 'assets/images/sprite/sprite.svg' ); // Include generated SVG Sprite
//  
//  include( 'parts/header-meta' ); // Include additional meta information in the header
}

add_action('wp_head', 'add_header_stuff');


?>