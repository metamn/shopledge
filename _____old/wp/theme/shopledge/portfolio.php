<?php 
/*
 * Template Name: Portfolio
 * @package WordPress
 */

  get_header(); 
?>

<?php 
  $items = query_posts2('posts_per_page=-1&cat='.PORTFOLIO);  
?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
	<div id="contents" class="col-1 left">
	  	  
    <?php the_content(); ?>    
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
		
		<?php if ($items) { ?>
		  <div id="items">
		    <?php 
		      $portfolio = true;
		      include "items.php"; 
		    ?>
		  </div>
		<?php } ?>
		
	</div>
<?php endwhile; ?>

<div id="sidebar">  
  <?php get_sidebar(); ?>   	  
</div>

		
<?php get_footer(); ?>
