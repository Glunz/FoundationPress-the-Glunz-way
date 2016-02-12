<?php
/*
Template Name: Call Buttons
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div class="row">
  <?php do_action( 'foundationpress_before_content' ); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
        <h1><?php the_field('uberschrift'); ?></h1>
        <h2><?php the_field('teaser'); ?></h2>
      </header>

      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
        <?php the_field('text'); ?>
      </div>

      <br />
      <h4 class="centering"><strong>Please select</strong></h4>
      <br />
      <div class="row">
        <div class="small-6 columns">
          <a href="<?php echo get_permalink(get_page_by_title('Kontaktformular Market')); ?>">
          <div class="alpbutton centerbutton">Submit a<br />market stand</div>
          </a>
        </div>
        <div class="small-6 columns">
          <a href="<?php echo get_permalink(get_page_by_title('Kontaktformular Session')); ?>">
          <div class="alpbutton centerbutton">Submit a<br />session</div>
          </a>
        </div>
      </div>
      <br />
      <br />

    </article>
  <?php endwhile;?>


  <?php do_action( 'foundationpress_after_content' ); ?>

  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
