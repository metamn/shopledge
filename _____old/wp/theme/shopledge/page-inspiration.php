<?php
/*
Template Name: Inspiration
 * @package WordPress
*/

  get_header();
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
	<div id="content" class="block">
	  <div id="article">	
	    <?php the_content(); ?>    	    
	  </div>    
  </div>
<?php endwhile; ?>

<div id="inspiration" class="block">
  <div id="items">
    <?php include "inspiration.html" ?>
  </div>
</div>

<?php get_footer() ?>
