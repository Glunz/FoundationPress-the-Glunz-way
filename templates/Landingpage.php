<?php
/*
Template Name: Landingpage
*/
$page = get_page_by_title( 'welcome' );

get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>


<div class="landingpage-logo-box">

  <a href="<?php echo get_permalink(pll_get_post($page->ID, "de")); ?>">
  	<svg class="sprite-item sprite-AlpWeek_Logo_1">
  	  <use class="sprite-item-obj" xlink:href="#sprite-AlpWeek_Logo_1"></use>
  	</svg>
  </a>
  
  <a href="<?php echo get_permalink(pll_get_post($page->ID, "fr")); ?>">
    <svg class="sprite-item sprite-AlpWeek_Logo_2">
      <use class="sprite-item-obj" xlink:href="#sprite-AlpWeek_Logo_2"></use>
    </svg>
  </a>
  
  <a href="<?php echo get_permalink(pll_get_post($page->ID, "it")); ?>">
    <svg class="sprite-item sprite-AlpWeek_Logo_3">
      <use class="sprite-item-obj" xlink:href="#sprite-AlpWeek_Logo_3"></use>
    </svg>
  </a>
  
  <a href="<?php echo get_permalink(pll_get_post($page->ID, "sl")); ?>">
    <svg class="sprite-item sprite-AlpWeek_Logo_4">
      <use class="sprite-item-obj" xlink:href="#sprite-AlpWeek_Logo_4"></use>
    </svg>
  </a>
  
  <a href="<?php echo get_permalink(pll_get_post($page->ID, "en")); ?>">
    <svg class="sprite-item sprite-AlpWeek_Logo_5">
      <use class="sprite-item-obj" xlink:href="#sprite-AlpWeek_Logo_5"></use>
    </svg>
  </a>

</div>

<a href="<?php echo get_permalink(get_page_by_title('call')); ?>" style="display:none;">
  <div class="flag-container">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flag/Flag_Animation_250.gif" />
  </div>
</a>

<footer class="landingpage-footer">
  <span>Organisation:</span>
  <a href="http://www.alpconv.org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/2.png" /></a>
  <a href="http://www.club-arc-alpin.eu" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/1.png" /></a>  
  <a href="http://www.alpenstaedte.org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/3.png" /></a>
  <a href="http://www.alpine-space.eu" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/4.png" /></a>
  <a href="http://www.cipra.org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/5.png" /></a>
  <a href="http://www.oekomodell.de" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/6.png" /></a>
  <a href="http://alpenallianz.org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/7.png" /></a>
  <a href="http://www.iscar-alpineresearch.org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/8.png" /></a>

  <span>Financial support:</span>
  <a href="http://www.bmub.bund.de" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/10.png" /></a>
  <a href="https://www.stmi.bayern.de" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsor/9.png" /></a>
  
</footer>

<div class="image-credit">Foto: TI Übersee / Ghirardini</div>


<?php $bgimage = get_field('fullscreen-background-image'); ?>
<?php if($bgimage): ?>
  <div class="fullscreenbackground-image" <?php responsive_fullscreen_background_image($bgimage); ?>></div>
<?php endif; ?>



<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_footer(); ?>