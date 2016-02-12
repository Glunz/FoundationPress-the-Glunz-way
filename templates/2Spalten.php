<?php
/*
Template Name: 2-Spalten Layout
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div class="row">
	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="row">

				<header class="small-12 columns">
					<h1><?php the_field('uberschrift'); ?></h1>
					<h2><?php the_field('teaser', false, false); ?></h2>
				</header>

				<div class="small-12 medium-6 columns">
					<?php the_field('textlinks'); ?>
				</div>
				<div class="small-12 medium-6 columns">
					<?php the_field('textrechts'); ?>
				</div>

			</div>
		</article>
	<?php endwhile;?>


	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

