<?php
/**
 * 
 * Template Name: About us
 */
get_header(); ?>
<?php
// Display post
if ( have_posts() ) : while ( have_posts() ) : the_post();


get_template_part( 'template-parts/8/8-content');?>
<?php  endwhile; endif?>


<?php
// The Query

query_posts( $args );
 
// The Loop
while ( have_posts() ) : the_post();
if ( in_category( array('about-page', 'whatwedo' )) ) : 
   
get_template_part( 'template-parts/10/10-content');?>
<?php  endif; ?><?php endwhile; wp_reset_query();?>

	

<?php get_footer(); ?>